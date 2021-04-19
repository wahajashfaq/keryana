<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct(){

        parent::__construct();
        if(!$this->session->userdata('admin_id'))
            return redirect('admin/login');
    }


    public function index()
    {
        $this->load->model('KeryanaProduct');
        $products = $this->KeryanaProduct->getAllProducts();

        $this->load->view('admin/all_product',["All_Products"=>$products]);	
    }


    public function CSV(){


        set_time_limit(600);
        $this->load->model('csv_model');
        $this->load->library('csvimport');
        $this->load->model('Categories');
        $this->load->model('Brand');

        $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/ProductList';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '2000';

        $this->load->library('upload', $config);


        $this->upload->overwrite = true; // To overwrite the file
        
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
            $this->load->view('admin/update_products', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/ProductList/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) {

                $csv_array = $this->csvimport->get_array($file_path);
                    /*echo "<pre>";
                    print_r($csv_array);
                    echo "</pre>";
                    exit;*/
                    foreach ($csv_array as $row) {

                       $firstCategoryID = $this->Categories->FILE_getFirstCategoryID($row['Category']);
                       $seconCategoryID = $this->Categories->FILE_getSecondCategoryID($row['Sub1'],$firstCategoryID);
                       $thirdCategoryID = $this->Categories->FILE_getThirdCategoryID($row['Sub2'],$seconCategoryID);
                       $product_name = $row['ProductName'];;
                       $imageName = $row['picCode'].'.png';
                       $no_of_units = 0;
                       $units = array();
                       $prices = array();
                       for ($i=1; $i<= 4; $i++) { 
                          if($row['Q'.$i]){

                             $no_of_units++;
                			/*$units["unit$i"] = 	$row['Q'.$i];
                			$prices["price$i"] = 	$row['P'.$i];*/
                		} else{
                			break;
                		}
                	}

                    $brandID = '';
                    if($row['brands']){

                        $brandID = $this->Brand->getBrandIDByName($row['brands'],$row['brand_image']);
                    }
                    $insert_data = array(
                        'product_name'=> $row['ProductName'],
                        'first_category_type'=>md5($firstCategoryID),
                        'second_category_type'=>md5($seconCategoryID),
                        'third_category_type'=>md5($thirdCategoryID),
                        'unit'=> $no_of_units,
                        'unit1' => $row['Q1'],
                        'unit2' => $row['Q2'],
                        'unit3' => $row['Q3'],
                        'unit4' => $row['Q4'],
                        'price1' => $row['P1'],
                        'price2' => $row['P2'],
                        'price3' => $row['P3'],
                        'price4' => $row['P4'],

                        'type1' => $row['t1'],
                        'type2' => $row['t2'],
                        'type3' => $row['t3'],
                        'type4' => $row['t4'],
                        'amount1' => $row['u1'],
                        'amount2' => $row['u2'],
                        'amount3' => $row['u3'],
                        'amount4' => $row['u4'],

                        'brand_id' => $brandID,
                        'excel_id' => $row['excel_id'],
                        'product_detail' => ''
                        );

                    
/*
                    echo "<pre>";
                    print_r ($insert_data);
                    echo "</pre>";*/
                    if($imageName=='')
                        exit;
                    $this->load->model('KeryanaProduct');
					//$this->KeryanaProduct->updateProduct($insert_data,$imageName);
                    $this->KeryanaProduct->updateAllProduct($insert_data,$imageName);

                }
                    $this->KeryanaProduct->autoAddBestSellings();
                    $this->KeryanaProduct->autoAddNewArrivals();
                    $this->KeryanaProduct->autoAddHotDeals();
                    
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                return redirect(base_url('admin/FileUpload'));
                //echo "<pre>"; print_r($insert_data);
            } else 
            $data['error'] = "Error occured";
            $this->load->view('admin/update_products', $data);
        }

    } 


    public function add2(){

      $data = array(
         'category_name'=> $this->input->post('category_name'),
         'category_id'=> $this->input->post('category_ID')
         );


      echo $data["catergory_name"];
      $this->load->model('Categories');
      $this->Categories->addSecondCategory($data);


  }


  public function updateStatus(){

    $this->load->model('KeryanaProduct');    
    $this->KeryanaProduct->updateStatus($this->input->post('status'),$this->input->post('productID'));
    echo "OK";
  }

  public function allProduct(){


        $this->load->model('KeryanaProduct');
        $products = $this->KeryanaProduct->getAllProducts();
        
        $this->load->view('admin/all_product',["All_Products"=>$products]); 
  }
  public function Add(){

      $this->load->model('Brand');
      $this->load->model('Categories');
      $brands_arr = $this->Brand->getAllBrands();
      $first_categories = $this->Categories->getFirstCategory();
      $this->load->view('admin/add_product',['brands'=>$brands_arr,'first_category'=>$first_categories]);
  }

  public function getSecondCategory(){

      $this->load->model('Categories');
      $result = $this->Categories->getSecondCategoryData($this->input->post('first_category_ID'));

      $returnData = '<option value="" >Select Second Category</option>';

      if($result) {

       foreach ($result as $row) {

           $option = '<option value="'.$row["EncryptedId"].'" >'.$row["Name"].'</option>';
           $returnData = $returnData.$option;

       }
        		# code...
   }                     

   echo "$returnData";
}

public function getThirdCategory(){

  $this->load->model('Categories');
  $result = $this->Categories->getThirdCategoryData($this->input->post('second_category_ID'));

  $returnData = '<option value="" >Select Second Category</option>';

  if($result) {

   foreach ($result as $row) {

       $option = '<option value="'.$row["EncryptedId"].'" >'.$row["Name"].'</option>';
       $returnData = $returnData.$option;

   }
}                     

echo "$returnData";
}

public function Add_Product(){

  $config['upload_path']          = './uploads/product_images';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 1000;
  $config['max_width']            = 1024;
  $config['max_height']           = 768;

  $this->load->library('upload', $config);

  if($this->upload->do_upload('image_file')){

      $img = $this->upload->data()['file_name'];
      echo "<pre>";
      print_r($this->input->post());
      echo "$img";
      echo "</pre>";
  }


  $this->load->model('KeryanaProduct');
  $this->KeryanaProduct->addNewProduct($this->input->post(),$img);
}

public function Add_Category(){

  $type = $this->input->post('category_type');

  $data = array(
     'category_name'=> $this->input->post('category'),
     'category_id'=> $this->input->post('category_ID')
     );

  if($type=="first"){

     $this->load->model('Categories');
     $this->Categories->addFirstCategory($data);

 } else if($type=="second"){

     $this->load->model('Categories');
     $this->Categories->addSecondCategory($data);

 } else if($type=="third"){

     $this->load->model('Categories');
     $this->Categories->addThirdCategory($data);
 }

 echo json_encode($data);
}

}
