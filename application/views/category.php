<?php include('about_header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="cbox xs-hidden">
                <div class="cbox1">Related Categories</div>
                <a href=""><div class="Maincat active"><i class="fa fa-angle-right" aria-hidden="true"></i><span><?php echo $CurrentCategory[0]["Name"] ?></span></div></a>
                <?php if ($side_categories): ?>
                  <?php foreach ($side_categories as $row): ?>
                  
                <a href="<?php echo base_url('welcome/category/'.$SubCategory.'/'.$row["EncryptedId"]) ?>" ><div class="Maincat sub"><i class="fa fa-angle-right" aria-hidden="true"></i><span><?php echo $row["Name"]; ?></span></div></a>
                <?php endforeach ?>
                <?php endif ?>
            </div>
            <div class="cbox xs-hidden" style="margin-top:10px">
                <div class="cbox1">Refine</div>
                <div class="head">Price</div>
                <div class="check">
                <input  type="checkbox" onclick="priceFilter()" id="pr1" /> 
                <label for="pr1">Under Rs 50</label>
                </div>
                <div class="check">
                <input  onclick="priceFilter()" type="checkbox" id="pr2" /> 
                <label for="pr2">Rs 50 to Rs 100</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="pr3" onclick="priceFilter()" /> 
                <label for="pr3">Rs 100 to Rs 500</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="pr4" onclick="priceFilter()" /> 
                <label for="pr4">Rs 500 to Rs 1000</label>
                </div>
                <div class="check">
                <input  type="checkbox" id="pr5" onclick="priceFilter()" /> 
                <label for="pr5">Above Rs 1000</label>
                </div>

                <?php if ($Side_Brands): ?>
              
                <div class="head">Brands</div>
          
                    <?php $count=1; foreach ($Side_Brands as $key => $value): ?>
      
                      <div class="check">
                      <input  value="<?php echo $key ?>" onclick="priceFilter()" type="checkbox" id="br<?php echo $count; ?>" /> 
                      <label for="br<?php echo $count++; ?>"><?php echo $value['BrandName']; ?></label>
                      </div>
                                                        
                    <?php endforeach ?>                                  
                <?php endif ?>
                <!--
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
                -->
            </div>
        </div>
        <div class="col-md-9">
             <img class="cbanner" src="<?php echo base_url('uploads/category/'.$CurrentCategory[0]['Image']) ?>"> 
            <br><br>
            
            <br><br>
            
            <div id="product_result">
              <div class="row">


            <?php if ($filterd){$count=0;
                $countlimit=4;
                if($this->session->userdata('width'))
                {
                    if($this->session->userdata('width')<992){
                        $countlimit=2;
                    }
                }
                 foreach ($filterd as $row){?> 

             <div class="col-md-3 product  col-xs-6 col-sm-6" style="padding-left:0px;padding-right:0px">
                                              <div class="offer_tag" id="<?php echo $row['EncryptedId'];?>"  <?php if(isset($row["Units"][0]["OfferType"])) {?> style="height: 40px"<?php }else{?>style="height: 60px"<?php }?>>
                                                <?php if(isset($row["Units"][0]["OfferType"])) {

                                                  if($row["Units"][0]["OfferType"]=="Amount"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>Rs ".$row["Units"][0]['OfferAmount']."<span> OFF</span></center></div><br><br>";

                                                  }else if($row["Units"][0]["OfferType"]=="Percent"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>".$row["Units"][0]['OfferAmount']." % <br><span>OFF</span></center></div><br><br>";
                                                  }
                                                }

                                                ?>
                                              </div>
                                              <center><div class="slider3-label"><img src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" style="width:150px;height:150px">
                                                <br><br><div style="height: 20px;"><?php echo $row["Name"] ?></div>
                                              </div><br>
                                              <a target="_blank" href="<?php echo base_url('welcome/product/'.$row["EncryptedId"]); ?>"><button class="qview">QUICK VIEW</button></a>
                                              <?php 
                                              if(count($row["Units"])==1){

                                                echo "<div class='qfix'>".$row['Units'][0]['Unit']."</div>";
                                              }
                                              else{ ?>

                                                <select class="new_arrivals_product qselect"  onchange="testing('<?php echo $row["EncryptedId"]; ?>',this)"  id="<?php echo $row["EncryptedId"]; ?>">
                                                  <?php 

                                                  foreach ($row["Units"] as $units) { ?>

                                                    <option  data-offertype='<?php echo $units["OfferType"]; ?>' data-offeramount='<?php echo $units["OfferAmount"]; ?>' data-percentage="<?php echo $units["ID"]; ?>" data-discount="<?php echo $units["Discount"] ?>" value="<?php echo $units["Price"]; ?>"><?php echo $units["Unit"]; ?></option>
                                                    <?php
                                                  }
                                                  ?>

                                                </select><br>
                                                <?php } 

                                                ?>

                                                <br>
                                         

                                                <?php if($row["Units"][0]["Discount"]==0){ ?>
                                                <span class="rs1_tag" style="color:#A1DB09 !important" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                  <span class="new_arrivals_price nprice" style="color:#6B953E !important;font-weight:bold"   data-discount="<?php echo $row["Units"][0]["Discount"] ?>"  data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span><br><br>
                                                  <?php } else {    ?> 
                                               <span class="rs_tag" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                    <span class="new_arrivals_price oprice"  data-discount="<?php echo $row["Units"][0]["Discount"] ?>" data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span>
                                                   <span style="color:#A1DB09 !important">Rs</span><span style="color:#A1DB09 !important" class="nprice new_arrivals_nprice" id="<?php echo $row["EncryptedId"]; ?>" > <?php echo round($row["Units"][0]["Price"]-$row["Units"][0]["Discount"]) ?></span><br><br>

                                                    <?php } ?>
                                                    <div class="qmang"><i class="fa fa-minus" aria-hidden="true" onclick="qminus(this)"></i><span id="<?php echo $row["EncryptedId"]; ?>"  class="new_arrivals_quantity qval">1</span><i class="fa fa-plus" aria-hidden="true" onclick="qplus(this)"></i></div>
                                                    <button class="addbtn" onclick="add_data('<?php echo $row["EncryptedId"]; ?>',this)" ><img  class="btn_image" width="26" height="21" src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                                                  </center>
                                                </div>
            <?php  $count++;
            if($count==$countlimit)
            {?>
                  </div><div class="row">   
                  
            <?php $count=0;
            }
            } // End of Foreach Loop ?>
                  </div>
            <?php } // End of If => No Product Check
              else {
                echo "<h1>No Product Found</h1>";
              }
             ?>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="backtotop" class="container-fluid">
    <a href="#top"><div class="backtotop"></div></a>
</div>


<input type="hidden" id="cat_type" value="<?php echo $URL_PARAMETER["TYPE"] ?>">
<input type="hidden" id="cat_id" value="<?php echo $URL_PARAMETER["ID"] ?>">

<?php include('about_footer.php') ?>


<script type="text/javascript">

  function priceFilter(){


    var brands_arr = [];
    var total_brands = <?php echo count($Side_Brands); ?>;
    var active_brands = 0;


    for (var i = 0; i < total_brands ; i++) {
      if ($('#br'+(i+1)).prop('checked')) {

          brands_arr[active_brands] = $('#br'+(i+1)).val();
          active_brands++;
          //alert($('#br'+(i+1)).val());
      }
    }

    $p1=0,$p2=0,$p3=0,$p4=0,$p5=0;
     if($('#pr1').prop('checked')){
        $p1 = 1;
     }
     if($('#pr2').prop('checked')){
        $p2 = 1;
     }
     if($('#pr3').prop('checked')){
        $p = 3;
     }
     if($('#pr4').prop('checked')){
        $p4 = 1;
     }
     if($('#pr5').prop('checked')){
        $p5 = 1;
     }

    jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url(); ?>" + "Filter/price",
              dataType: 'text',
              data: {

                    price1 : $p1,
                    price2 : $p2,
                    price3 : $p3,
                    price4 : $p4,
                    price5 : $p5,
                    type   : $('#cat_type').val(),
                    category_id   : $('#cat_id').val(),
                    brands_count : active_brands,
                    brands_array : brands_arr

              },
              success: function(res) {

                if (res)
                {
                    $('#product_result').html(res);
                    //alert(res);
                }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

  }
/*
function testing(event,e){
/*
    $price = $('.new_arrivals_product#'+event).val();
    $percentage = $('.new_arrivals_product#'+event).find(':selected').attr('data-percentage');
    $discount = $('.new_arrivals_product#'+event).find(':selected').attr('data-discount');
    $('#'+event+'.new_arrivals_price').html($price);
    $('#'+event+'.new_arrivals_price').attr('data-percentage',$percentage);

    if($discount>0){
        $('#'+event+'.new_arrivals_nprice').html($price-$discount);
        $('#'+event+'.new_arrivals_nprice').attr('data-discount',$discount);
      }
      *//*
      var select= e.parentElement.parentElement.parentElement;
      //console.log(select);
      $price = $(select).find('.new_arrivals_product#'+event).val();
      $percentage = $(select).find('.new_arrivals_product#'+event).find(':selected').attr('data-percentage');
      $discount = $(select).find('.new_arrivals_product#'+event).find(':selected').attr('data-discount');
      $offer_type = $(select).find('.new_arrivals_product#'+event).find(':selected').attr('data-offertype');
      $offer_amount = $(select).find('.new_arrivals_product#'+event).find(':selected').attr('data-offeramount');
      $(select).find('#'+event+'.new_arrivals_price').html($price);
      $(select).find('#'+event+'.new_arrivals_price').attr('data-percentage',$percentage);
      $(select).find('#'+event+'.new_arrivals_nprice').html($price-$discount);
      $(select).find('#'+event+'.new_arrivals_price').attr('data-discount',$discount);
      console.log($discount);
      //$(e).parent().closest('div').first().$('#'+event+'.new_arrivals_nprice').attr('data-discount',$discount);
      //$(e).parent().closest('div').first().$('#'+event+'.new_arrivals_price').html($price);
      //$(e).parent().closest('div').first().$('#'+event+'.new_arrivals_price').attr('data-percentage',$percentage)
        //  alert($('#'+event+'.new_arrivals_price').attr('data-percentage'));
       //   alert($('#'+event+'.new_arrivals_price').html());


     /*   
      $(select).find('#'+event+'.rs_tag').html("Rs");

      if($discount==0){
        $(select).find('#'+event+'.rs_tag').html("");
        $(select).find('#'+event+'.new_arrivals_nprice').html("");
      }

       console.log($(e.parentElement.parentElement));

       if($offer_type=="Amount") {

        $(e.parentElement.parentElement).find('.offer_tag').html("<div class='discount' style='margin-left:10px'><center>Rs "+$offer_amount+"<span> OFF</span></center></div><br><br>");

      }else if($offer_type=="Percent"){

        $(e.parentElement.parentElement).find('.offer_tag').html("<div class='discount' style='margin-left:10px'><center>"+$offer_amount+" % <span>OFF</span></center></div><br><br>");
      }else{

        $(e.parentElement.parentElement).find('.offer_tag').html("");
      }
    
  }
*/
/*
  function   add_data(product_ID,event){

    $(document).ready(function(){

      $price = $('#'+product_ID+'.new_arrivals_price').html();
      $quantity = $('#'+product_ID+'.new_arrivals_quantity').html();
      $percentage = $('#'+product_ID+'.new_arrivals_price').attr('data-percentage');
      $discount = $('#'+product_ID+'.new_arrivals_price').attr('data-discount');
      //alert($discount);

            //console.log("Price =>"+$price+"  AND  ID =>"+$percentage);
            //  alert($quantity);

            jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url(); ?>" + "/customer/Cart/AddToCart",
              dataType: 'text',
              data: {
                priceOfProduct : $price, 
                UnitID : $percentage,
                quantityOfProduct : $quantity,
                discount : $discount
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
                  /*  $(event).children().attr('src',"<?php echo base_url('assets/images/addbicon.png');?>");
                    $('.dropdown-content').html(res);
                     $(event).children("span").text("Added");
                    $(event).attr('disable',"true");
                  }

                },
                beforeSend : function()
                {
                  $(event).children().attr('src',"<?php echo base_url('assets/images/adding.gif');?>");
                  $(event).attr('disable',"true");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });


          });
  }
*/




  </script>