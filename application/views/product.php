<?php include('about_header.php') ?>

<style type="text/css">
    #product-img{
        border: 1px solid #ECECEC;
        margin-top: 10px;
        width: 260px;
        padding: 20px 0px;
    }
    .sample-vendor {
        color: #848484;
        font-size: 80%;
    }
    .price {
        font-size: 24px;
        font-weight: 500;
        color: #212121!important;
        font-family: Roboto,Arial,sans-serif;
    }
    .compare-price {
        font-weight: 400;
        margin-left: 6px;
        font-family: Roboto,Arial,sans-serif;
        font-size: 15px!important;
        margin-right: 5px;
        color:#8B8B8B;
        text-decoration: line-through;
    }
    .prdsave {
        margin-bottom: 20px;
        margin-left: 0;
        font-size: 16px;
        font-weight: 500;
        color: #16be48;
        font-family: Roboto,Arial,sans-serif;
    }
    .codoption {
        font-size: 14px;
        color: #666;
        font-weight: 400;
    }
    .header {
        border: none;
        padding: 0 0 7px;
        font-weight: 500;
        color: #878787;
    }
    .product_delivery input[type=text] {
        border: 1px solid #9c9c9c;
        border-radius: 3px 0 0 3px;
        border-right: 0;
        margin-top: 20px;
        text-align: center;
        font-size: 90%;
        height: 36px;
    }
    .product_delivery .chk-btn{
        height: 36px;
        border-radius: 0 3px 3px 0;
        color: white;
        background-color: #505050;
        margin-left: -4px;
        margin-top: -1px;
    }
    .add-to-cart-btn{
        background: #92c83f!important;
        border: 0;
        height: 40px;
        display: block;
        padding: 0;
        min-width: 185px;
        margin-top: 20px;
        margin-bottom: 10px;
        border-radius: 3px;
        font-weight: 500;
        letter-spacing: 0;
        font-size: 15px;
        float: left;
        clear: none;
        font-family: Roboto,sans-serif;
        line-height: 43px;
        box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
        color: white;
    }
    .share_toolbox {
        clear: both;
        border: 1px solid #e3e3e3;
        border-width: 1px 0;
        overflow: hidden;
        padding: 10px 0;
        margin-bottom: 15px;
        width: 100%;
    }
    .share_toolbox p {
        float: left;
        color: #969696;
        margin: 0;
        font-size: 70%;
    }
    .share_toolbox ul {
        float: right;
        margin: 0;
        line-height: 18px;
        list-style:none;
        padding-left: 0;
    }
    .share_toolbox li {
        display: inline;
        margin-right: 5px;
    }
    .share_toolbox i {
       color: #969696;
   }
   .coupons{
    border: 1px solid #DDDDDD;
    width: 230px;
    border-radius: 5px;
}
.coupons h5{
    font-weight: bold;
    margin: 15px 0px;
}
.product_offers .offer {
    margin-bottom: 15px;
}
.product_offers .couponcode {
    color: #96C658;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 0;
}
.product_offers .desc {
    font-size: 12px;
    color: #000;
    font-family: Open Sans,sans-serif;
    line-height: 1.4;
    margin-bottom: 8px;
}
.product_offers .btn {
    padding: 0;
    font-size: 11px;
    letter-spacing: 0;
    line-height: 27px;
    height: 23px;
    width: 85px;
    border: 0;
    border-radius: 4px;
    font-weight: 500;
    font-family: Roboto,Arial,sans-serif;
    background: #96C658!important;
    color: #fff!important;
}
.tnc {
    margin-top: 5px;
    font-size: 10px;
    color: #999;
}
.prod-des{
    margin-top: 20px;
    border: 1px solid #e3e3e3;
    margin-bottom: 20px;
}
.prod-des-title{
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: bold;
}
.prod-des-content{
    width: 100%;
    font-size: 12px;
    margin-bottom: 10px;
}
.prod-des-content a{
    float: right;
}
</style>


<div class="container">
    <div id="tabs"> <a href=""> Home </a> <i class="fa fa-caret-right" aria-hidden="true"></i>  <?php echo $PRODUCT[0]["PNAME"] ?></div>
</div>

<div class = "container">
    <div class = "container-fluid">
        <div class = "row">
            <div class="col-sm-3" id = "product-img">
                <img  style="height: 260px;width: 260px;" src="<?php echo base_url('uploads/product_images/'.$PRODUCT[0]["Image"]); ?>">
            </div>
            <div class ="col-sm-6 product_delivery">
                <h4><strong><?php echo $PRODUCT[0]["PNAME"] ?></strong></h4>
                <p class="sample-vendor"><span>Brand: <?php echo $PRODUCT[0]["BNAME"] ?></span></p>
                <div class="prices">
                    <span class="price on-sale">Rs. <span id="product_price">281.00</span></span>
                    <span class="compare-price">Rs. 330.00</span>
                    <span class="prdsave">14% off</span>
                </div>
                <p class="codoption"><strong>Cash on Delivery</strong> available.</p>
                <div class="header">Weight</div>
                <select id="price_select">
                    <?php 
                    foreach ($UNITS as $row) { ?>
                    <option data-percentage="" value="<?php echo $row["Price"]; ?>"><?php echo $row["Unit"]; ?></option>
                    <?php
                }
                ?>
            </select> <br>
            <input type="text" placeholder="Enter Coupon" id="dpincode">
            <button class="btn chk-btn" type="button" onclick="checkDelivery()">Check</button> <br>
            <button type="button" class="btn add-to-cart-btn"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>ADD TO CART</button><br>
            <div class="share_toolbox">
                <p><strong>Share</strong> with your friends.</p>
                <ul>
                    <li><a href="" title="Email"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                    <li><a href="" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-3 coupons">
            <h5>Coupons Available</h5>
            <div class = "product_offers">
                <p class="couponcode">USE CODE : SUGAR1499</p>
                <p class="desc">USE CODE : SUGAR1499, Get Free 1Kg Uttam Sugar on Order On Rs 1499</p>
                <button class="btn">Copy Code</button>
            </div>
            <div class = "product_offers">
                <p class="couponcode">USE CODE : SUGAR1499</p>
                <p class="desc">USE CODE : SUGAR1499, Get Free 1Kg Uttam Sugar on Order On Rs 1499</p>
                <button class="btn">Copy Code</button>
            </div>
            <div class = "product_offers">
                <p class="couponcode">USE CODE : SUGAR1499</p>
                <p class="desc">USE CODE : SUGAR1499, Get Free 1Kg Uttam Sugar on Order On Rs 1499</p>
                <button class="btn">Copy Code</button>
            </div>
            <p class="tnc">*Terms &amp; Conditions Apply</p>
        </div>
    </div>
    <div class="row">
        <div class ="col-md-12 prod-des">
            <div class = "prod-des-title">
                <p>Description</p>
            </div>
            <div class = "prod-des-content">
                <p>
                    <?php echo $PRODUCT[0]["Details"] ?>
                </p>
            </div>
        </div>
    </div>
</div>
</div>


<div id="backtotop" class="container-fluid">
    <a href="#top"><div class="backtotop"></div></a>
</div>

<script type="text/javascript">
    $(document).ready(function(){

               $price = $('#price_select').val();
               $('#product_price').html($price);

        $('#price_select').change(function(){

               $price = $('#price_select').val();
               $('#product_price').html($price);
        });
    });
</script>
<?php include('about_footer.php') ?>