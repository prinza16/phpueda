<?php
session_start();
if (isset($_SESSION["lang"])) {
    if ($_SESSION["lang"] == "en") {
        include("lang/en.php");
    } else if ($_SESSION["lang"] == "th") {
        include("lang/th.php");
    } else {
        include("lang/jp.php");
    }
} else {
    include("lang/en.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="UEDA INDUSTRY (THAILAND) CO.,LTD" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="UEDA INDUSTRY (THAILAND) CO.,LTD" />
    <meta property="og:description" content="The best wear-resistant Carbide tool" />

    <title>UEDA INDUSTRY (THAILAND) CO.,LTD</title>
    <link rel="icon" type="image/png" href="images/icon-logo/ueda logo.png">


    <!-- CSS ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

    <link rel="stylesheet" href="css/style.css">

    <link href="css/stylehome.css" rel="stylesheet">
    <link href="css/stylehome1.css" rel="stylesheet">

</head>

<style type="text/css">
.customfont {
    font-family: 'fox_on_the_run_extra-boldXBd';
}

.button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.button1:hover {
    background-color: #008CBA;
    color: white;
}

.button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {
    background-color: #e7e7e7;
}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}
</style>
<?php
$year = 0;
$yearStart = 2003;
$now = date('Y');
$year = $now - $yearStart;
?>

<body>
    <?php include("header.php"); ?>

    <div id="banner-area" class="banner-area">
        <figure>
            <img src="images/banner/index/CompanyMeeVision01.1.jpg" style="padding-top: 0; width: 100%; height: 100%;">
        </figure>
    </div><!-- Banner area end -->

    <section class="responsive" style="padding-top: 0px; padding-bottom: 0px;">

        <!-- Slider -->
        <div align="center">
            <div class="container-index" style="margin-top: 0px; padding-top: 0px;">

                <div class="row">

                    <div class="col-lg-6 mt-6 mt-lg-0" style="padding-top: 50px;">
                        <div class="ts-service-box-content" align="center">
                            <h4 style="color:#3f51b5; font-size: 28px;"><?php echo $homepageourproducts ?></h4>
                        </div>

                        <div id="slider-index" style="padding-bottom: 60px;">
                            <div class="slides-index">

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Product\Product1.jpg">
                                    </div>
                                </div>

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Product\Product2.jpg">
                                    </div>
                                </div>

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Product\Product3.jpg">
                                    </div>
                                </div>

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>

                                    <div class="image-index">
                                        <img src="images\Index\Product\Product4.jpg">
                                    </div>
                                </div>

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Product\Product5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-thumb-actions" style="width: 300px;">
                            <a href="product.php"
                                class="section-btn btn btn-primary btn-block"><?php echo $homepageourproductsviewmore ?></a>
                        </div>
                    </div>


                    <!-- part 2 -->
                    <div class="col-lg-6 mt-6 mt-lg-0" style="padding-top: 50px;">
                        <div class="ts-service-box-content" align="center">
                            <h4 style="color:#3f51b5; font-size: 28px;"><?php echo $homepageourmachine ?></h4>
                        </div>
                        <div id="slider-index">
                            <div class="slides-index">

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Machine\Machine1.jpg">
                                    </div>
                                </div>

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Machine\Machine2.jpg">
                                    </div>
                                </div>
                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Machine\Machine3.jpg">
                                    </div>
                                </div>
                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Machine\Machine4.jpg">
                                    </div>
                                </div>

                                <div class="slider-index">
                                    <div class="content-index">

                                    </div>
                                    <div class="image-index">
                                        <img src="images\Index\Machine\Machine5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="team-thumb-actions" style="width: 300px; margin-top: 38px;">
                            <a href="Technology.php"
                                class="section-btn btn btn-primary btn-block"><?php echo $homepageourmachineviewmore ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
























    <!-- <section>
        <div align="center">
            <h1><?php echo $homepagetitle ?></h1>

            <?php echo $homepagetitle1 ?>

            <h4><br><?php echo $homepagetitle2 ?></br></h4>

        </div>
    </section>

    <div class="ts-service-box-content" align="center">
        <h4 style="color:#3f51b5; font-size: 28px;"><?php echo $homepageourproducts ?></h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class='gallery'>
                    <input checked='' id='ind-1' name='gallery' type='radio'>
                    <label for='ind-1'></label>
                    </input>
                    <input id='ind-2' name='gallery' type='radio'>
                    <label for='ind-2'></label>
                    </input>
                    <input id='ind-3' name='gallery' type='radio'>
                    <label for='ind-3'></label>
                    </input>
                    <ul class='gallery-images'>
                        <li class='gallery-item'>
                            <label for='ind-1'>
                                <img
                                    src='images/sample-homepage/DSC02400New01.jpg'>
                            </label>
                        </li>
                        <li class='gallery-item'>
                            <label for='ind-2'>
                                <img
                                    src='images/sample-homepage/MoldNew06.jpg'>
                            </label>
                        </li>
                        <li class='gallery-item'>
                            <label for='ind-3'>
                                <img
                                    src='images/sample-homepage/PressPart4.jpg'>
                            </label>
                        </li>
                    </ul>
                    <div class="team-thumb-actions">
                        <a href="product.php" class="section-btn btn btn-primary btn-block"><?php echo $homepageourproductsviewmore ?></a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="gap-60"></div>
        <div class="ts-service-box-content" align="center">
            <h4 style="color:#3f51b5; font-size: 28px;"><?php echo $homepageourmachine ?></h4>
        </div>

        <div></div>
        <div class='gallery1'>
            <input checked='' id='ind-4' name='gallery1' type='radio'>
            <label for='ind-4'></label>
            </input>
            <input id='ind-5' name='gallery1' type='radio'>
            <label for='ind-5'></label>
            </input>
            <input id='ind-6' name='gallery1' type='radio'>
            <label for='ind-6'></label>
            </input>
            <ul class='gallery1-images'>
                <li class='gallery1-item'>
                    <label for='ind-4'>
                        <img
                            src='images/sample-homepage/Mold01.jpg'>
                    </label>
                </li>
                <li class='gallery1-item'>
                    <label for='ind-5'>
                        <img
                            src='images/sample-homepage/Mold04.jpg'>
                    </label>
                </li>
                <li class='gallery1-item'>
                    <label for='ind-6'>
                        <img
                            src='images/sample-homepage/Mold05.jpg'>
                    </label>
                </li>
            </ul>
            <div class="team-thumb-actions">
                <a href="Technology.php" class="section-btn btn btn-primary btn-block"><?php echo $homepageourmachineviewmore ?></a>
            </div>

        </div>
    </div>
    </div> -->

    <!-- <section>
               <div class="container" align="center">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Productions<small></small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb"> 
                                   <div class="team-info">
                                   <br><h3>Mold Product</h3>
                                        <div class="team-image">
                                        <img src="images/fluke/mold parts.png" class="img-responsive" alt="">
                                   </div>
                                   <br><span>We use a special quality of steel to make mold, in which when hardens, molds have a long lasting life And use modern technology machineries CNC,WIRECUT EDM. GRINDING which have a high precision in production</span>
                                   </div>
                                   <div class="team-thumb-actions">
                                        <a href="Technology.php" class="section-btn btn btn-primary btn-block">View more</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb"> 
                                   <div class="team-info">
                                   <br><h3>Injection Product</h3>
                                        <div class="team-image">
                                        <img src="images/fluke/injection product.png" class="img-responsive" alt="">
                                   </div>
                                   <br><span>We have professional staff about high quality products of plastic injection for automotive parts and electronics parts.</span>
                                   </div>
                                   <div class="team-thumb-actions">
                                   <br><br><a href="InjectD.php" class="section-btn btn btn-primary btn-block">View more</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb"> 
                                   <div class="team-info">
                                   <br><h3>Stamping Product</h3>
                                        <div class="team-image">
                                        <img src="images/fluke/Stamping Product.png" class="img-responsive" alt="">
                                   </div>
                                   <br><span>We have the high quality stamping machine for introduce products and support the hard product from customers.</span>
                                   </div>
                                   <div class="team-thumb-actions">
                                   <br><br><a href="qaD.php" class="section-btn btn btn-primary btn-block">View more</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
  </section> -->
    <?php include("footer.php"); ?>


    <!-- <script type="text/javascript" src="js/popper.js"></script><script> window.start.init({Palette:"palette1",Mode:"floating right",Theme:"block",Message:"We use cookies to improve user experience. Choose what cookies you allow us to use. You can read more about our Cookie Policy in our ",ButtonText:"Accept All",LinkText:"Privacy policy",Time:"5",})</script> -->

    <script type="text/javascript" src="https://cookiecdn.com/cwc.js"></script>
    <script id="cookieWow" type="text/javascript" src="https://cookiecdn.com/configs/HQgdoVinfqevpH9dtUqK1Cq7"
        data-cwcid="HQgdoVinfqevpH9dtUqK1Cq7"></script>

    <script src="./script.js"></script>
</body>

</html>