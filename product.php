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
    <link rel="icon" type="image/jpg" href="images/icon-logo/ueda logo.png">

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
    <link rel="stylesheet" href="css/style.css">
    <!-- FontHeader -->
    <link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />






    <style>
    .hide {
        display: none;
    }

    .myDIV:hover+.hide {
        display: block;
        color: red;
    }
    </style>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="banner-carousel banner-carousel-2 mb-0">

        <div>
            <figure>
                <img src="images/banner/product/banner2.jpg" style="padding-top: 0; width: 100%; height: 100%;">
            </figure>

            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-heading">
                                <h1 class="banner-title"
                                    style="background: rgba(255, 255, 255, 0.55);padding: 10px 10px;">
                                    <?php echo $bannerproduct ?></h1>

                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div>
    </div>

    <div class="gap-60"></div>
    
<!-- group product-->

      <!-- <div class="tabs">
        <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone">Group 1</label>
        <div class="tab">
            <div class="col-lg-6" style="float:none;margin:auto;">
                <p align="center" style="color:#3f51b5; font-size: 22px;">Parking Brake(Automotive Part)</p>
                <figure>
                    <img src="images/all-product/Group1/PartInj01.jpg"
                        style="padding-top: 0; width: 100%; height: 100%;">
                </figure>
            </div>
        </div>

        <input type="radio" name="tabs" id="tabtwo">
        <label for="tabtwo">Group 2</label>
        <div class="tab">
            <div class="col-lg-6" style="float:none;margin:auto;">
                <p align="center" style="color:#3f51b5; font-size: 22px;">Door lock(Automotive Part)</p>
                <div id="page-slider" class="page-slider small-bg">
                    <figure>
                        <img src="images/all-product/Group2/PartInj02.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                    <figure>
                        <img src="images/all-product/Group2/PartInj26.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                </div>
            </div>
        </div>

        <input type="radio" name="tabs" id="tabthree">
        <label for="tabthree">Group 3</label>
        <div class="tab">
        <div class="col-lg-6" style="float:none;margin:auto;">
                <p align="center" style="color:#3f51b5; font-size: 22px;">Push button control(Automotive Part)</p>
                <div id="page-slider" class="page-slider small-bg">
                    <figure>
                        <img src="images/all-product/Group3/PartInj05.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                    <figure>
                        <img src="images/all-product/Group3/PartInj06.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                    <figure>
                        <img src="images/all-product/Group3/PartInj08.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                    <figure>
                        <img src="images/all-product/Group3/PartInj28.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                </div>
            </div>
        </div>

        <input type="radio" name="tabs" id="tabfour">
        <label for="tabfour">Group 4</label>
        <div class="tab">
        <div class="col-lg-6" style="float:none;margin:auto;">
                <p align="center" style="color:#3f51b5; font-size: 22px;">Switch control(Automotive Part)</p>
                <div id="page-slider" class="page-slider small-bg">
                    <figure>
                        <img src="images/all-product/Group4/PartInj07.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                    <figure>
                        <img src="images/all-product/Group4/PartInj09.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                    <figure>
                        <img src="images/all-product/Group4/PartInj21.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                    <figure>
                        <img src="images/all-product/Group4/PartInj22.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure>
                </div>
            </div>
        </div>
        </div>
    </div> -->




    <!--injection product  -->

    <div class="col-md-12">
        <div class="text-center">
            <div class="ts-service-box-content">
                <h4 style="color:#3f51b5; font-size: 28px;"><?php echo $productpagehead ?></h4>
            </div>
        </div>
    </div>

    <section id="features" class="blue" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="content">
            <div class="slider slider-for">
                <!-- part 1 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 01/Part1.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 01/Part1.2.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 01/Part1.3.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 2 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 02/Part 2.1.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 02/Part 2.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 02/Part 2.2.jpg"
                            height="300" width="400"></center>
                </div>


                <!-- part 3 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 03/Part03.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 03/Part03.2.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 03/Part03.3.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 4 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 04/Part04.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 04/Part04.2.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 5 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 05/Part05.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 6 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 06/Part06.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 06/Part06.2.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 06/Part06.3.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 7 -->
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 07/Inj Part07.1.jpg"
                            height="300" width="400">
                        <center>
                </div>

                <!-- part 8 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 08/Part 08.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 08/Part 08.2.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 08/Part 08.3.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 9 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 09/Part09.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 09/Part09.2.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 10 -->
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 10/PartInj.10.1.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 11 -->
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 11/InjectionPart11.1.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 12 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 12/DSC01577.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 13 -->
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 13/InjectionPart13.1.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 14 -->
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 14/Inj.Part 14.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 14/Inj.Part 14.2.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 15 -->
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 15/Inj.Part 15.1.jpg"
                            height="300" width="400"></center>
                </div>
                <div>
                    <center><img
                            src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 15/Inj.Part 15.2.jpg"
                            height="300" width="400"></center>
                </div>

                <!-- part 16 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 16.jpg" height="300"
                            width="400"></center>
                </div>

                <!-- part 17 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 17.jpg" height="300"
                            width="400"></center>
                </div>

                <!-- part 18 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 18.jpg" height="300"
                            width="400"></center>
                </div>

                <!-- part 19 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/Inj Part19.jpg" height="300"
                            width="400"></center>
                </div>

                <!-- part 20 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 20.jpg" height="300"
                            width="400"></center>
                </div>

                <!-- part 21 -->
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part21.jpg" height="300"
                            width="400"></center>
                </div>
            </div>

            <div class="slider slider-nav">
                <!-- part 1 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 01/Part1.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 01/Part1.2.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 01/Part1.3.jpg"
                        height="100" width="200"></div>

                <!-- part 2 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 02/Part 2.1.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 02/Part 2.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 02/Part 2.2.jpg"
                        height="100" width="200"></div>

                <!-- part 3 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 03/Part03.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 03/Part03.2.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 03/Part03.3.jpg"
                        height="100" width="200"></div>

                <!-- part 4 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 04/Part04.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 04/Part04.2.jpg"
                        height="100" width="200"></div>

                <!-- part 5 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 05/Part05.jpg"
                        height="100" width="200"></div>

                <!-- part 6 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 06/Part06.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 06/Part06.2.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 06/Part06.3.jpg"
                        height="100" width="200"></div>

                <!-- part 7 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 07/Inj Part07.1.jpg"
                        height="100" width="200"></div>

                <!-- part 8 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 08/Part 08.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 08/Part 08.2.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 08/Part 08.3.jpg"
                        height="100" width="200"></div>

                <!-- part 9 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 09/Part09.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 09/Part09.2.jpg"
                        height="100" width="200"></div>

                <!-- part 10 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 10/PartInj.10.1.jpg"
                        height="100" width="200"></div>

                <!-- part 11 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 11/InjectionPart11.1.jpg"
                        height="100" width="200"></div>

                <!-- part 12 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 12/DSC01577.jpg"
                        height="100" width="200"></div>

                <!-- part 13 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 13/InjectionPart13.1.jpg"
                        height="100" width="200"></div>

                <!-- part 14 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 14/Inj.Part 14.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 14/Inj.Part 14.2.jpg"
                        height="100" width="200"></div>

                <!-- part 15 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 15/Inj.Part 15.1.jpg"
                        height="100" width="200"></div>
                <div><img src="images/all-product/NewEditimage/ProductsInjection/งานInj. Part 15/Inj.Part 15.2.jpg"
                        height="100" width="200"></div>

                <!-- part 16 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 16.jpg" height="100"
                        width="200"></div>

                <!-- part 17 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 17.jpg" height="100"
                        width="200"></div>

                <!-- part 18 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 18.jpg" height="100"
                        width="200"></div>

                <!-- part 19 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/Inj Part19.jpg" height="100"
                        width="200"></div>

                <!-- part 20 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part 20.jpg" height="100"
                        width="200"></div>

                <!-- part 21 -->
                <div><img src="images/all-product/NewEditimage/ProductsInjection/Inj.Part21.jpg" height="100"
                        width="200"></div>
            </div>
        </div>

        <!-- Stampingg Part -->

    </section>


    <div class="col-md-12">
        <div class="text-center">
            <div class="ts-service-box-content">
                <h4 style="color:#3f51b5; font-size: 28px;"><?php echo $productpagehead1 ?></h4>
            </div>
        </div>
    </div>
    <section id="features" class="blue" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="content">
            <div class="slider slider-for">

                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping01.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping02.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping03.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping04.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping05.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping06.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping07.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping08.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsStamping/Stamping09.jpg" height="300"
                            width="400">
                    </center>
                </div>
            </div>



            <div class="slider slider-nav">

                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping01.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping02.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping03.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping04.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping05.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping06.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping07.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping08.jpg" height="200"
                        width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsStamping/Stamping09.jpg" height="200"
                        width="200">
                </div>
            </div>
        </div>

    </section>

    <div class="col-md-12">
        <div class="text-center">
            <div class="ts-service-box-content">
                <h4 style="color:#3f51b5; font-size: 28px;"><?php echo $productpagehead2 ?></h4>
            </div>
        </div>
    </div>
    <section id="features" class="blue" style="padding-top: 0px;padding-bottom: 0px;">
        <div class="content">
            <div class="slider slider-for">
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsMold/MoldNew01.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsMold/MoldNew02.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsMold/MoldNew03.jpg" height="300"
                            width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsMold/Mold04.jpg" height="300" width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsMold/Mold05.jpg" height="300" width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsMold/Mold06.jpg" height="300" width="400">
                    </center>
                </div>
                <div>
                    <center><img src="images/all-product/NewEditimage/ProductsMold/Mold07.jpg" height="300" width="400">
                    </center>
                </div>
            </div>



            <div class="slider slider-nav">
                <div><img src="images/all-product/NewEditimage/ProductsMold/MoldNew01.jpg" height="200" width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsMold/MoldNew02.jpg" height="200" width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsMold/MoldNew03.jpg" height="200" width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsMold/Mold04.jpg" height="200" width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsMold/Mold05.jpg" height="200" width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsMold/Mold06.jpg" height="200" width="200">
                </div>
                <div><img src="images/all-product/NewEditimage/ProductsMold/Mold07.jpg" height="200" width="200">
                </div>
            </div>
        </div>

    </section>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
    <script src='https://kenwheeler.github.io/slick/slick/slick.js'></script>
    <script src="./script.js"></script>

    </section>
    <!-- <section id="main-container" class="main-container"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-5 mt-lg-0">

                    <div id="page-slider" class="page-slider small-bg">

                        <div class="item" style="background-image:url(images/all-product/injpart1/Part1.1.jpg)">
                        </div>

                        <div class="item" style="background-image:url(images/all-product/injpart1/Part1.2.jpg)">
                        </div>
                        <div class="item" style="background-image:url(images/all-product/injpart1/Part1.3.jpg)">
                        </div>
                    </div>

                    
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <div id="page-slider" class="page-slider small-bg">

                        <div class="item" style="background-image:url(images/technology-page/tec4.jpg)">
                        </div>

                        <div class="item" style="background-image:url(images/technology-page/tec5.jpg)">
                        </div>

                        <div class="item" style="background-image:url(images/technology-page/tec6.jpg)">
                        </div>

                    </div>
                </div>
                
            </div>

     -->




    </div><!-- Container end -->


    </section><!-- Main container end -->
    <!-- <section id="ts-features" class="ts-features"> 
    <div class="container">
      <div class="col">
        <div class="row">
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/die and plug.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
            <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail1 ?></p>
          </a>
          </div>
          <div class="col-md-4">
           <img loading="lazy"style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/forging.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail2 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/MOLD.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail3 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/Part03.3.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail4 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/Part04.3.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail5 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/Part05.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail6 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/Part06.3.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail7 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/Inj Part07.1.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail8 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/Part 08.3.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail9 ?></p>
          </a>
          </div>
          <div class="col-md-4">
          <img loading="lazy" style="height: 80%; width: 100%;" src="images/product-page/product-detail-down/Part10.jpg">
          <a class="text-primary mt-3 " style="color:#66B2FF">
          <p style="font-size: 24px; text-align: center; font-weight: bold;" class="mt-3"><?php echo $productdetail10 ?></p>
          </a>
          </div>
          
          </div>
        </div>
    </div>
  </section> -->



    <?php include("footer.php"); ?>



    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="js/script.js"></script>
</body>

</html>