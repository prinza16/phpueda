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
    <!-- banner -->

    <div class="banner-carousel banner-carousel-2 mb-0">

        <div>
            <figure>
                <img src="images/banner/qadepartment/QaDepartment.jpg"
                    style="padding-top: 0; width: 100%; height: 100%;">
            </figure>

            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-heading">
                                <h1 class="banner-title"
                                    style="background: rgba(255, 255, 255, 0.55);padding: 10px 10px; margin-top: 50px;">
                                    <?php echo $bannermachineqadep ?></h1>

                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div>
    </div>

    <div class="gap-60"></div>

    <div class="col-md-12">
        <div class="text-center">

            <div class="ts-service-box-content">
                <h4 style="color:#66B2FF; font-size: 22px;"> " <?php echo $technology ?> "</h4>
            </div>
        </div>
    </div>
    <br>
    <section>
        <div class="container">
            <div class="row">


                <div class="col-md-4 col-sm-6" style="padding-bottom: 50px;">
                    <div class="team-thumb">
                        <div class="team-info">

                            <div class="team-image">
                            </div>

                        </div>
                        <div class="team-thumb-actions">
                            <a href="Technology.php"
                                class="section-btn btn btn-primary btn-block"><?php echo $machinetype ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" style="padding-bottom: 50px;">
                    <div class="team-thumb">
                        <div class="team-info">

                            <div class="team-image">
                            </div>

                        </div>
                        <div class="team-thumb-actions">
                            <a href="InjectD.php"
                                class="section-btn btn btn-primary btn-block"><?php echo $machinepage2 ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6" style="padding-bottom: 50px;">
                    <div class="team-thumb">
                        <div class="team-info">

                            <div class="team-image">
                            </div>

                        </div>
                        <div class="team-thumb-actions">
                            <a href="qaD.php"
                                class="section-btn btn btn-primary btn-block"><?php echo $machinepage3 ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-md-12">
        <div class="text-center">

            <div class="ts-service-box-content" class="responsive">
                <h4 style=" font-size: 28px;"><?php echo $machinetype2 ?></h4>
            </div>
        </div>
    </div>
    <section>
        <div class="col-md-10" style="margin: auto;">
            <div class="table-responsive">
                <table class="table" style="font-size: 12px;">
                    <thead class="table-info">
                        <tr>
                            <th scope="col" colspan="3"><?php echo $technum ?></th>
                            <th scope="col"><?php echo $techhead ?></th>
                            <th scope="col"><?php echo $techhead1 ?></th>
                            <th scope="col">
                                <div align="center"><?php echo $techhead5 ?>
                            </th>
                            <th scope="col">
                                <div align="center"><?php echo $techhead3 ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td colspan="3"><?php echo $techqa1 ?></td>
                            <td><?php echo $Makerqa1 ?></td>
                            <td>
                                <div align="center"><?php echo $Modelqa1 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryqa1 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td colspan="3"><?php echo $techqa2 ?></td>
                            <td><?php echo $Makerqa2 ?></td>
                            <td>
                                <div align="center"><?php echo $Modelqa2 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryqa2 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="3"><?php echo $techqa3 ?></td>
                            <td><?php echo $Makerqa3 ?></td>
                            <td>
                                <div align="center"><?php echo $Modelqa3 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryqa3 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="3"><?php echo $techqa4 ?></td>
                            <td><?php echo $Makerqa4 ?></td>
                            <td>
                                <div align="center"><?php echo $Modelqa4 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryqa4 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td colspan="3"><?php echo $techqa5 ?></td>
                            <td><?php echo $Makerqa5 ?></td>
                            <td>
                                <div align="center"><?php echo $Modelqa5 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryqa5 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td colspan="3"><?php echo $techqa6 ?> </td>
                            <td><?php echo $Makerqa6 ?></td>
                            <td>
                                <div align="center"><?php echo $Modelqa6 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryqa6 ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="main-container" class="main-container" style="padding-top: 0px; padding-bottom: 0px">
        <div align="center">
            <div class="row">
                <div class="col-lg-3" style="float:none;margin:auto;">
                    <div id="page-slider" class="page-slider small-bg">
                        <figure>
                            <img src="images/qaDepartment/QAMachine01.JPG"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 1 end -->
                        <figure>
                            <img src="images/qaDepartment/QAMachine02.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 2 end -->
                        <figure>
                            <img src="images/qaDepartment/QAMachine03.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 3 end -->
                        <figure>
                            <img src="images/qaDepartment/QAMachine04.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 4 end -->
                    </div>
                </div>
                <div class="col-lg-5" style="float:none;margin:auto;">
                    <div id="page-slider" class="page-slider small-bg">
                        <figure>
                            <img src="images/qaDepartment/QAMachine05.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 5 end -->
                        <figure>
                            <img src="images/qaDepartment/QAMachine06.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 6 end -->
                        <figure>
                            <img src="images/qaDepartment/QAMachine07.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>
</body>

</html>