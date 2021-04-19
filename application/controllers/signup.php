<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('customer_id'))
      return redirect('customer/dashboard','refresh');
  }




  // __________________Load Categories_______________________


  function load_categories(){


    $this->load->model('Categories'); 
    $first_categories = $this->Categories->getFirstCategory();
    $second_categories = $this->Categories->getSecondCategory();
    $third_categories = $this->Categories->getThirdCategory();

    for ($i=0; $i <count($second_categories); $i++) { 
      $second_categories[$i]["SUB CATEGORIES"] = [];
      for ($j=0; $j <count($third_categories); $j++) { 
        if($third_categories[$j]["SecondCategoryID"]==$second_categories[$i]["ID"]){

          array_push($second_categories[$i]["SUB CATEGORIES"], $third_categories[$j]);

        }
      }
    }


    for ($i=0; $i <count($first_categories); $i++) { 
      $first_categories[$i]["SUB CATEGORIES"] = [];
      for ($j=0; $j <count($second_categories); $j++) { 
        if($second_categories[$j]["FirstCategoryID"]==$first_categories[$i]["ID"]){

          array_push($first_categories[$i]["SUB CATEGORIES"], $second_categories[$j]);

        }
      }
    }

    return $first_categories;

  }


  // ___________________________________________________


  function getCartResult(){

    $this->load->model('Customer');
    $this->load->model('Cart_Model');
    $total_items = 0;
    if($userID=$this->session->userdata('customer_id')){

      $cart_result = $this->Cart_Model->getCurrentCart($userID);
      if($cart_result){
        foreach ($cart_result as $items) {
          $total_items = $total_items + 1;
        }
      }

    }else if($CartItems = $this->session->userdata('My_Cart'))
    {
      $cart_result = [];
      foreach ($CartItems as $key => $value) {

        if($CartItems[$key]){
          $KeyResult = $this->Cart_Model->getCartsBySession($key);
          $CartItems[$key]["Image"] = $KeyResult[0]["Image"];
          $CartItems[$key]["Name"] = $KeyResult[0]["Name"];
          $CartItems[$key]["OfferType"] = $KeyResult[0]["OfferType"];
          $CartItems[$key]["OfferAmount"] = $KeyResult[0]["OfferAmount"];
          $CartItems[$key]["Discount"] = $value["Discount"];

          $CartItems[$key]["Unit"] = $KeyResult[0]["Unit"];
          $CartItems[$key]["ProductID"] = $key;
        /*echo "<pre>";
        print_r ($CartItems[$key]);
        echo "</pre>";  
        exit;*/
        $cart_result[$key] = $CartItems[$key];
        $total_items = $total_items + $CartItems[$key]["Quantity"];

      }else{
        $CartItems[$key] = null;
      }   //$CartItems[$UNIT_ID]['Quantity'] = $CartItems[$UNIT_ID]['Quantity']+$QUANTITY;

    }

    $this->session->set_userdata("My_Cart",$cart_result);


      //$cart_result = $CartItems;

  }else {
    $cart_result = null;
  }

  return ["CART"=>$cart_result,"TOTAL_ITEMS"=>$total_items];
}


public function index()
{
    // echo  date('Y-m-d H:i:s');
    // echo $this->input->ip_address();

  $first_categories = $this->load_categories();

  $result = $this->getCartResult();
  $cart_result  = $result["CART"];
  $total_items = $result["TOTAL_ITEMS"];


  $this->load->view('login',["categories"=>$first_categories,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items,"TITLE"=>"Login/Signup"]);
}

public function keryana($friend_ID,$confirmation_Code){

  if($confirmation_Code)
    echo "$friend_ID<br>$confirmation_Code<br>";
  else
    echo "$friend_ID<br>";
}


public function sendEmail($email,$password,$verificationCode,$userID){

  $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://mail.keryana.com',
    'smtp_port' => 465,
    'smtp_user' => 'welcome@keryana.com',
    'smtp_pass' => 'Wahaj125',
    'charset'   => 'iso-8859-1',
    'mailtype' => 'html'
    );
  $this->load->library('email', $config);


  $this->load->library('email');

  $this->email->set_newline("\r\n");
  $this->email->from('welcome@keryana.com', 'Keryana');
  $this->email->to($email); 
    //$this->email->cc('another@another-example.com'); 
    //$this->email->bcc('them@their-example.com'); 

  /*$verficationLink = "<a href='".base_url('signup/verification/'.$userID.'/'.$verificationCode)."'>Click Here to cofirm</a>";*/
  $this->email->subject('Confirmation');
  /*$this->email->message('<b>Email : </b>'.$email. '<br><b>Password : </b>'. $password .'<br><b>Verification Code : </b>'.$verficationLink);  */
  $this->email->message('<b>Email : </b>'.$email. '<br><b>Password : </b>'. $password);  

  if($this->email->send()){
    echo "Email Send";
  }else{

    echo $this->email->print_debugger();    
  }

}


public function verification($userID , $confirmationCode){


  $this->load->model('customer');
  if($this->customer->verifyCustomer($userID,$confirmationCode)){

   $this->load->model('Cart_Model');
   $this->session->set_userdata('customer_id',$userID);
   $this->session->set_userdata('customer_name',$this->customer->getNameLetters($userID));
   if($this->session->userdata('My_Cart')) {

    if ($previousData = $this->Cart_Model->get_Cart_Session($userID)) {
      $this->Cart_Model->updateCart($previousData);
    }

  }
  else{
           $this->session->set_userdata('My_Cart',$this->Cart_Model->get_Cart_Session($userID));   // Load into session
         }

         return redirect('');


       } else {

        return redirect('');
      }

    }

    public function CreateAccount(){


      $this->load->helper('form');
      $this->form_validation->set_error_delimiters('<em class="text-danger">', '</em>');
      $this->form_validation->set_rules('fname', 'First Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|is_unique[customers.Email]');
      $this->form_validation->set_rules('pass', 'Password', 'required');

      if ($this->form_validation->run() == TRUE)
      {

        $this->load->model('customer');
        $userID =   $this->customer->signup($this->input->post());
        $this->sendEmail($this->input->post('email'),$this->input->post('pass'),'','');
        $this->load->model('Cart_Model');
        $this->session->set_userdata('customer_id',$userID);
        $this->session->set_userdata('customer_name',$this->customer->getNameLetters($userID));
        if($this->session->userdata('My_Cart')){

          if ($previousData = $this->Cart_Model->get_Cart_Session($userID)) {
            $this->Cart_Model->updateCart($previousData);
          }else{
            $this->Cart_Model->addProductInExistingCart($this->session->userdata('My_Cart'),$this->session->userdata('customer_id'));
          }

        }
        else{
           $this->session->set_userdata('My_Cart',$this->Cart_Model->get_Cart_Session($userID));   // Load into session
         }

         return redirect('');

       } else {


      $first_categories = $this->load_categories();

      $result = $this->getCartResult();
      $cart_result  = $result["CART"];
      $total_items = $result["TOTAL_ITEMS"];


      $this->load->view('login',["categories"=>$first_categories,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items,"TITLE"=>"Login/Signup"]);
      
      }

    }




    public function Login(){



      $this->load->helper('form');
      $this->form_validation->set_error_delimiters('<em class="text-danger">', '</em>');
      $this->form_validation->set_rules('l_email', 'Email', 'required');
      $this->form_validation->set_rules('l_pass', 'Password', 'required');

      if ($this->form_validation->run() == TRUE)
      {
        $this->load->model('customer');
        $login_id = $this->customer->login($this->input->post());

        if($login_id) {

        // Correct username/password
          $this->load->model('Cart_Model');
          $this->session->set_userdata('customer_id',$login_id);
          $this->session->set_userdata('customer_name',$this->customer->getNameLetters($login_id));
          if($this->session->userdata('My_Cart')) {

            if ($previousData = $this->Cart_Model->get_Cart_Session($login_id)) {
              $this->Cart_Model->updateCart($previousData);
            }else{

              $this->Cart_Model->addProductInExistingCart($this->session->userdata('My_Cart'),$this->session->userdata('customer_id'));
            }
          } else{
           $this->session->set_userdata('My_Cart',$this->Cart_Model->get_Cart_Session($login_id));   // Load into session
         }

         return redirect('');
       }else{

          // Incorrect username/password
        $this->session->set_flashdata('error', 'Invalid username/password');
        return redirect('signup');
      }

    } 
    else{
      $first_categories = $this->load_categories();

      $result = $this->getCartResult();
      $cart_result  = $result["CART"];
      $total_items = $result["TOTAL_ITEMS"];


      $this->load->view('login',["categories"=>$first_categories,"CartProducts"=>$cart_result,"CartItemsCount"=>$total_items,"TITLE"=>"Login/Signup"]);

    }
  }


  public function fblogin(){

    $fb = new Facebook\Facebook([
     'app_id' => '146255652603926',
     'app_secret' => 'ba7541716e60f754119ab577244bc3eb',
     'default_graph_version' => 'v2.5',
     ]);

    $helper = $fb->getRedirectLoginHelper();


    $permissions = ['email','user_location','user_birthday','publish_actions']; 

  // For more permissions like user location etc you need to send your application for review

    $my_url = base_url('signup/fbcallback');
    $loginUrl = $helper->getLoginUrl($my_url, $permissions);

    header("location: ".$loginUrl);
  }

  public function fbcallback(){


    $this->load->helper('url','date');

    $fb = new Facebook\Facebook([
     'app_id' => '146255652603926',
     'app_secret' => 'ba7541716e60f754119ab577244bc3eb',
     'default_graph_version' => 'v2.5',
     ]);

    $helper = $fb->getRedirectLoginHelper();  
    if (isset($_GET['state'])) {
      $helper->getPersistentDataHandler()->set('state', $_GET['state']);
    }
    try {  

      $accessToken = $helper->getAccessToken();  

    }catch(Facebook\Exceptions\FacebookResponseException $e) {  
          // When Graph returns an error  
      echo 'Graph returned an error: ' . $e->getMessage();  
      exit;  
    } catch(Facebook\Exceptions\FacebookSDKException $e) {  
          // When validation fails or other local issues  
      echo 'Facebook SDK returned an error: ' . $e->getMessage();  
      exit;  
    }  


    try {
          // Get the Facebook\GraphNodes\GraphUser object for the current user.
          // If you provided a 'default_access_token', the '{access-token}' is optional.
      $response = $fb->get('/me?fields=id,name,email,first_name,last_name,birthday,location,gender', $accessToken);
         // print_r($response);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
      echo 'ERROR: Graph ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
      echo 'ERROR: validation fails ' . $e->getMessage();
      exit;
    }
    
        // User Information Retrival begins.....................................

    $me = $response->getGraphUser();
    $this->load->model('customer');
    $login_id = $this->customer->fb_signup($me->getProperty('email'),$me->getProperty('first_name'),$me->getProperty('last_name'),$me->getProperty('id'));

    $this->load->model('Cart_Model');
    $this->session->set_userdata('customer_id',$login_id);
    $this->session->set_userdata('customer_name',$this->customer->getNameLetters($login_id));
    if($this->session->userdata('My_Cart')){

      if ($previousData = $this->Cart_Model->get_Cart_Session($login_id)) {
        $this->Cart_Model->updateCart($previousData);
      }else{
       $this->Cart_Model->addProductInExistingCart($this->session->userdata('My_Cart'),$login_id);
     }

   }
   else{
           $this->session->set_userdata('My_Cart',$this->Cart_Model->get_Cart_Session($login_id));   // Load into session
         }

         return redirect('');

         $location = $me->getProperty('location');
         echo "Full Name: ".$me->getProperty('name')."<br>";
         echo "First Name: ".$me->getProperty('first_name')."<br>";
         echo "Last Name: ".$me->getProperty('last_name')."<br>";
         echo "Gender: ".$me->getProperty('gender')."<br>";
         echo "Email: ".$me->getProperty('email')."<br>";
         echo "location: ".$location['name']."<br>";
         echo "Birthday: ".$me->getProperty('birthday')."<br>";
         echo "Facebook ID: <a href='https://www.facebook.com/".$me->getProperty('id')."' target='_blank'>".$me->getProperty('id')."</a>"."<br>";
         $profileid = $me->getProperty('id');
         echo "</br><img src='//graph.facebook.com/$profileid/picture?type=large'> ";
         echo "</br></br>Access Token : </br>".$accessToken; 


       }





     }


     /* End of file signup.php */
/* Location: ./application/controllers/signup.php */