<?php include('about_header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="cbox">
                <div class="cbox1">Our Categories</div>
                <a href=""><div class="Maincat active"><i class="fa fa-angle-right" aria-hidden="true"></i><span><?php echo $CurrentCategory[0]["Name"] ?></span></div></a>
                <?php if ($side_categories): ?>
                  <?php foreach ($side_categories as $row): ?>
                  
                <a href="<?php echo base_url('welcome/category/'.$SubCategory.'/'.$row["EncryptedId"]) ?>" ><div class="Maincat sub"><i class="fa fa-angle-right" aria-hidden="true"></i><span><?php echo $row["Name"]; ?></span></div></a>
                <?php endforeach ?>
                <?php endif ?>
            </div>
            <div class="cbox" style="margin-top:10px">
                <div class="cbox1">Refine</div>
                <div class="head">Price</div>
                <div class="check">
                <input  type="checkbox" id="pr1" /> 
                <label for="pr1">Under Rs 50</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="pr2" /> 
                <label for="pr2">Rs 50 to Rs 100</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="pr3" /> 
                <label for="pr3">Rs 100 to Rs 500</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="pr4" /> 
                <label for="pr4">Rs 500 to Rs 1000</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="pr5" /> 
                <label for="pr5">Above Rs 1000</label>
                </div>
                <div class="head">Brands</div>
                <div class="check">
                <input  type="checkbox" id="br1" /> 
                <label for="br1">Nestle</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="br2" /> 
                <label for="br2">Cocacola</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="br3" /> 
                <label for="br3">Lipton</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="br4" /> 
                <label for="br4">Tapal</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="br5" /> 
                <label for="br5">Uniliver</label>
                </div>
                <div class="head">Weights</div>
                <div class="check">
                <input  type="checkbox" id="Wr1" /> 
                <label for="Wr1">100 g</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="Wr2" /> 
                <label for="Wr2">500 g</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="Wr3" /> 
                <label for="Wr3">1 Kg</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="Wr4" /> 
                <label for="Wr4">5 Kg</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="Wr5" /> 
                <label for="Wr5">20 Kg</label>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <img class="cbanner" src="<?php echo base_url('assets/images/home_slider_image_1.jpg') ?>"><br><br>
            <div class="row">


            <?php if ($filterd){?>
              
            <?php foreach ($filterd as $row){?> 

             <div class="col-md-3 product" style="padding-left:0px;padding-right:0px">

              <center><div class="slider3-label"><img src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" style="width:150px;height:150px">
                <br><br><div><?php echo $row["Name"] ?></div>
              </div><br>
              <a target="_blank" href="<?php echo base_url('welcome/product/'.$row["EncryptedId"]); ?>"><button class="qview">QUICK VIEW</button></a>
              <?php if(count($row["Units"])==1)
            echo "<div class='qfix'>".$row['Units'][0]['Unit']."</div>";else{ ?>
            <select class="new_arrivals_product qselect"  onchange="testing('<?php echo $row["EncryptedId"]; ?>')"  id="<?php echo $row["EncryptedId"]; ?>">
              <?php 
              foreach ($row["Units"] as $units) { ?>
              <option data-percentage="<?php echo $units["ID"]; ?>" value="<?php echo $units["Price"]; ?>"><?php echo $units["Unit"]; ?></option>
              <?php
            }
            ?>

          </select><br>
            <?php } 

            ?>

          <br><br>
          <span class="new_arrivals_price nprice" data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" >Rs <?php echo $row["Units"][0]["Price"]; ?></span>
          <!-- <span class="nprice">Rs 500</span><br><br> -->
          <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span id="<?php echo $row["EncryptedId"]; ?>"  class="new_arrivals_quantity qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
          <button class="addbtn" onclick="add_data('<?php echo $row["EncryptedId"]; ?>',this)" ><img  class="btn_image" width="26" height="21" src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
              <hr>
            </center>
            </div>
            
            <?php } // End of Foreach Loop ?>
            <?php } // End of If => No Product Check
              else {
                echo "<h1>No Product Found</h1>";
              }
             ?>
            </div>
        </div>
    </div>
</div>
<div id="backtotop" class="container-fluid">
    <a href="#top"><div class="backtotop"></div></a>
</div>
<?php include('about_footer.php') ?>


<script type="text/javascript">


  function testing(event){

    $price = $('.new_arrivals_product#'+event).val();
    $percentage = $('.new_arrivals_product#'+event).find(':selected').attr('data-percentage');
    console.log($('#'+event+'.new_arrivals_price').html($price));
    console.log($('#'+event+'.new_arrivals_price').attr('data-percentage',$percentage));
        //  alert($('#'+event+'.new_arrivals_price').attr('data-percentage'));
       //   alert($('#'+event+'.new_arrivals_price').html());

     }


     function   add_data(product_ID,event){

      $(document).ready(function(){

        $price = $('#'+product_ID+'.new_arrivals_price').html();
        $quantity = $('#'+product_ID+'.new_arrivals_quantity').html();
        $percentage = $('#'+product_ID+'.new_arrivals_price').attr('data-percentage');


            //console.log("Price =>"+$price+"  AND  ID =>"+$percentage);
            //  alert($quantity);

            jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url(); ?>" + "/customer/Cart/AddToCart",
              dataType: 'text',
              data: {
                priceOfProduct : $price, 
                UnitID : $percentage,
                quantityOfProduct : $quantity
              },
              success: function(res) {

                if (res)
                {
                    // Show Entered Value
                    /*
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                    */

                    //alert(res);
                    $(event).children().attr('src',"<?php echo base_url('assets/images/addbicon.png');?>");
                    $('.dropdown-content').html(res);
                  }

                },
                beforeSend : function()
                {
                  $(event).children().attr('src',"<?php echo base_url('assets/images/adding.gif');?>");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });


          });
    }

  </script>