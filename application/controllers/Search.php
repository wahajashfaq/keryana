<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Controller {

	public function __construct(){

		parent::__construct();
	}


	public function index()
	{
        $this->load->model('KeryanaProduct');
        $psearch =  $this->KeryanaProduct->searchProduct($this->input->post());
        $output="";
        $count=0;
        $output = "<div id='searchParent'>"; 
        if($psearch)
        {
            foreach ($psearch as &$row) {

            $units["Units"] = array();
            $row["Units"]  = $this->KeryanaProduct->getProductUnit($row["EncryptedId"]);


            }

               
            $output =$output."<div class='row' id='psearch'>";
            foreach($psearch as $var)
            {
            $output=$output."<div class='col-md-2 product' style='padding-left:0px;padding-right:0px'>";
            $output=$output."<div class='discount' style='margin-left:20px'><center>19% <span>OFF</span></center></div><br><br>";
            $output=$output."<center><div class='slider3-label'><img src='".base_url('uploads/product_images/'.$var['Image'])."' style='width:150px;height:150px'>";
            $output=$output."<br><br><div style='height:20px'>".$var['Name']."</div>";
            $output=$output."</div><br>";
            $output=$output."<a target='_blank' href='".base_url('welcome/product/'.$row["EncryptedId"])."'><button class='qview'>QUICK VIEW</button></a>";
            if(count($row["Units"])==1){
            $output=$output."<div class='qfix'>".$row['Units'][0]['Unit']."</div>";
            }
            else{
                $output=$output."<select class='new_arrivals_product qselect'  onchange='testing('".$row['EncryptedId']."')  id='".$row["EncryptedId"]."'>";

                  foreach ($row["Units"] as $units) { 
                  $output=$output."<option data-percentage='".$units['ID']."' value='".$units["Price"]."'>".$units["Unit"]."</option>";

                }

              $output=$output."</select><br>";
            }
            $output=$output."<br><br>";
            $output=$output."<span class='new_arrivals_price nprice' data-percentage='".$row["Units"][0]["ID"]."' id='".$row["EncryptedId"]."' >Rs" .$row["Units"][0]["Price"]."</span><br><br>";
            $output=$output."<div class='qmang'><i class='fa fa-minus' aria-hidden='true'></i><span id='".$row["EncryptedId"]."'  class='new_arrivals_quantity qval'>0</span><i class='fa fa-plus' aria-hidden='true'></i></div>";
            $output=$output."<button class='addbtn'><img src='assets/images/addbicon.png'><span>Add</span></button>";
            $output=$output."</center><hr>";
            $output=$output."</div>";
                $count++;
                if($count==6)
                {
                 $output=$output."</div>";
                 $output=$output."<div class='row' id='psearch'>";
                 $count=0;
                }
            }
            $output=$output."</div></div>";
        }
        else
        {
            $output=$output."<div class='row' id='psearch'><div class='col-md-12'>";
            $output=$output."<center><h1>Products not found<h1></center>";
            $output=$output."</div></div>";
        }
    /*<div class='row'>        
    <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
      <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
      <center><div class="slider3-label"><img src="assets/images/product.jpg" style="width:150px;height:150px">
        <br><br><div>Product name</div>
      </div><br>
      <button class="qview">QUICK VIEW</button>
      <div class="qfix">5 Kg</div>
      <br>
      <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
      <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
      <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
    </center>
  </div>
  </div>*/
        echo $output;
    }
}
