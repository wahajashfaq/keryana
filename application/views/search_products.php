 <div class="row">


  <?php if ($filterd){$count=0;
  $countlimit=6;
                if($this->session->userdata('width'))
                {
                    if($this->session->userdata('width')<992){
                        $countlimit=2;
                    }
                }
  ?>

  <?php foreach ($filterd as $row){?> 
  
  <div class="col-md-2 product  col-xs-6 col-sm-6" style="padding-left:0px;padding-right:0px">
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
                                                   <span style="color:#A1DB09 !important">Rs</span><span style="color:#6B953E !important;font-weight:bold !important" class="nprice new_arrivals_nprice" id="<?php echo $row["EncryptedId"]; ?>" > <?php echo round($row["Units"][0]["Price"]-$row["Units"][0]["Discount"]) ?></span><br><br>

                                                    <?php } ?>
                                                    <div class="qmang"><i class="fa fa-minus" aria-hidden="true" onclick="qminus(this)"></i><span id="<?php echo $row["EncryptedId"]; ?>"  class="new_arrivals_quantity qval">1</span><i class="fa fa-plus" aria-hidden="true" onclick="qplus(this)"></i></div>
                                                    <button class="addbtn" onclick="add_data('<?php echo $row["EncryptedId"]; ?>',this)" ><img  class="btn_image" width="26" height="21" src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                                                  </center>
                                                </div>

<?php $count++;if($count==$countlimit){?>
</div><div class="row">
<?php
$count=0;} // End of Foreach Loop ?>
<?php }

  } // End of If => No Product Check
  else {
    echo "<center><h1>No Product Found</h1><center>";
  }
  ?>
</div>