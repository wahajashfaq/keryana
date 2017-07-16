<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

	public function index()
	{
    //$now = date('Y-m-d H:i:s');
    echo $this->input->ip_address();
  	$this->load->view('login');
	}

	public function CreateAccount(){


    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    $this->form_validation->set_rules('fname', 'First Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[customers.Email]');
    $this->form_validation->set_rules('pass', 'Password', 'required');

    //$this->load->model('feature'); Load Model
    //$all_features = $this->feature->getAllFeatures(); Model Function


    if ($this->form_validation->run() == TRUE)
    {
      $featureName = $this->input->post('feature',TRUE); // get form field , TRUE for security

      $this->load->model('feature');

      $this->feature->addNewFeature($featureName);

      return redirect('admin/features');

    } else {
      $this->load->view('admin/add_features',['all_features'=>$all_features]);  
    }

		echo $this->input->post('fname');
		echo $this->input->post('lname');
		echo $this->input->post('email');
		echo $this->input->post('pass');

		exit;
	}

	public function Login(){
		echo $this->input->post('email');
		echo $this->input->post('pass');		

		exit;
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

		$loginUrl = $helper->getLoginUrl('http://www.localhost/keryana/signup/fbcallback', $permissions);

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
    
        // User Information Retrival begins................................................
        $me = $response->getGraphUser();
        
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