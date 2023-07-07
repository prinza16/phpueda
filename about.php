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
</head>

<body>
    <?php include("header.php"); ?>

    <div class="banner-carousel banner-carousel-2 mb-0">
        <div>
            <figure>
                <img src="images/DSC02233.jpg"
                    style="margin:0; width: 100%; height: 500px; object-position: 5px 15%;">
            </figure>
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text">
                        <!-- <h2 class="box-slide-title"><?php echo $headbout1 ?></h2> -->
                        <h3 class="box-slide-sub-title"><?php echo $headbout2 ?></h3>
                        <p class="box-slide-description">
                            <?php echo $headbout3 ?>
                        </p>
                        <p>
                            <a href="profile.php" class="slider btn btn-primary"><?php echo $headboutbut ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-box">
        <h2><?php echo $aboutushead ?></h2>
        <p><?php echo $aboutus1 ?></p>
    </div>

    <section id="ts-features" class="ts-features" style="padding-top: 0px;">
        <div class="m-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ts-intro">
                        <h3 class="into-sub-title"><?php echo $headCorporatevision ?></h3>
                        <p><div align="center" style="font-size: 15px; font-weight: bold;"><?php echo $Corporatevision4 ?></div></p>

                        <p><?php echo $Corporatevision5 ?></p>

                        <p><div align="right" style="font-size: 18px; font-weight: bold;"><?php echo $Corporatevision2 ?></div></p>
                        
                        <!-- <div class="text-right">
                             <img loading="lazy" width="30%" style="height: 40%;" src="images/DSC02233.jpg">  
                        </div> -->

                        <p><div align="right" style="font-size: 18px; font-weight: bold;"><?php echo $Corporatevision3 ?></div></p>
                    </div>

                    <div class="gap-20"></div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">

                    <h3 class="into-sub-title"><?php echo $titlebout21 ?></h3>
 
                    <div class="accordion accordion-group" id="our-values-accordion">
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $titlebout22 ?>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    <?php echo $titlebout2 ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <?php echo $titlebout23 ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    <?php echo $infoboutHu ?><br>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <?php echo $titlebout24 ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    <?php echo $infoboutTech ?><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>
</body>

</html>