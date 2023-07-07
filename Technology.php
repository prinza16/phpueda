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
                <img src="images/banner/machine/HeadMold1.jpg" style="padding-top: 0; width: 100%; height: 100%;">
            </figure>

            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-heading">
                                <h1 class="banner-title"
                                    style="background: rgba(255, 255, 255, 0.55);padding: 10px 10px;">
                                    <?php echo $bannermachinemold ?></h1>

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


    </div>
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
                                class="section-btn btn btn-primary btn-block"><?php echo $machinepage1 ?></a>
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
                <h4 style=" font-size: 28px;"><?php echo $machinetype ?></h4>
            </div>
        </div>
    </div>

    <section>
        <div class="col-md-10" style="margin: auto;">
            <div class="table-responsive">
                <table class="table" style="font-size: 12px;">
                    <thead class="table-info">
                        <tr>
                            <th scope="col-lg-3" colspan="3"><?php echo $technum ?></th>
                            <th scope="col-lg-3"><?php echo $techhead  ?></th>
                            <th scope="col-lg-3"><?php echo $techhead1 ?></th>
                            <th scope="col-lg-3">
                                <div align="center"><?php echo $techhead2 ?>
                            </th>
                            <th scope="col-lg-3"><?php echo $techhead3 ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td colspan="3"><?php echo $techmold1 ?></td>
                            <td><?php echo $Maker1 ?></td>
                            <td>
                                <div align="center"><?php echo $Model1 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin1 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td colspan="3"><?php echo $techmold2 ?></td>
                            <td><?php echo $Maker2 ?></td>
                            <td>
                                <div align="center"><?php echo $Model2 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin2 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="3"><?php echo $techmold3 ?></td>
                            <td><?php echo $Maker3 ?></td>
                            <td>
                                <div align="center"><?php echo $Model3 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin3 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="3"><?php echo $techmold4 ?></td>
                            <td><?php echo $Maker4 ?></td>
                            <td>
                                <div align="center"><?php echo $Model4 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin4 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td colspan="3"><?php echo $techmold5 ?></td>
                            <td><?php echo $Maker5 ?></td>
                            <td>
                                <div align="center"><?php echo $Model5 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin5 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td colspan="3"><?php echo $techmold6 ?> </td>
                            <td><?php echo $Maker6 ?></td>
                            <td>
                                <div align="center"><?php echo $Model6 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin6 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td colspan="3"><?php echo $techmold7 ?></td>
                            <td><?php echo $Maker7 ?></td>
                            <td>
                                <div align="center"><?php echo $Model7 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin7 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td colspan="3"><?php echo $techmold8 ?></td>
                            <td><?php echo $Maker8 ?></td>
                            <td>
                                <div align="center"><?php echo $Model8 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin8 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td colspan="3"><?php echo $techmold9 ?></td>
                            <td><?php echo $Maker9 ?></td>
                            <td>
                                <div align="center"><?php echo $Model9 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin9 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td colspan="3"><?php echo $techmold10 ?></td>
                            <td><?php echo $Maker10 ?></td>
                            <td>
                                <div align="center"><?php echo $Model10 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin10 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td colspan="3"><?php echo $techmold11 ?></td>
                            <td><?php echo $Maker11 ?></td>
                            <td>
                                <div align="center"><?php echo $Model11 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin11 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td colspan="3"><?php echo $techmold12 ?></td>
                            <td><?php echo $Maker12 ?></td>
                            <td>
                                <div align="center"><?php echo $Model12 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin12 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td colspan="3"><?php echo $techmold13 ?></td>
                            <td><?php echo $Maker13 ?></td>
                            <td>
                                <div align="center"><?php echo $Model13 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin13 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td colspan="3"><?php echo $techmold14 ?></td>
                            <td><?php echo $Maker14 ?></td>
                            <td>
                                <div align="center"><?php echo $Model14 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin14 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td colspan="3"><?php echo $techmold15 ?></td>
                            <td><?php echo $Maker15 ?></td>
                            <td>
                                <div align="center"><?php echo $Model15 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin15 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td colspan="3"><?php echo $techmold16 ?></td>
                            <td><?php echo $Maker16 ?></td>
                            <td>
                                <div align="center"><?php echo $Model16 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin16 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td colspan="3"><?php echo $techmold17 ?></td>
                            <td><?php echo $Maker17 ?></td>
                            <td>
                                <div align="center"><?php echo $Model17 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin17 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td colspan="3"><?php echo $techmold18 ?></td>
                            <td><?php echo $Maker18 ?></td>
                            <td>
                                <div align="center"><?php echo $Model18 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin18 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td colspan="3"><?php echo $techmold19 ?></td>
                            <td><?php echo $Maker19 ?></td>
                            <td>
                                <div align="center"><?php echo $Model19 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryin19 ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="main-container" class="main-container" style="padding-top: 0px; padding-bottom: 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="page-slider" class="page-slider small-bg">
                        <figure>
                            <img src="images/technology-page/Mold01.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 1 end -->
                        <figure>
                            <img src="images/technology-page/Mold02.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 2 end -->
                        <figure>
                            <img src="images/technology-page/Mold03.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 3 end -->
                        <figure>
                            <img src="images/technology-page/Mold04.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 4 end -->
                        <figure>
                            <img src="images/technology-page/Mold05.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 5 end -->
                        <figure>
                            <img src="images/technology-page/Mold06.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 6 end -->
                        <figure>
                            <img src="images/technology-page/Mold07.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 7 end -->
                        <figure>
                            <img src="images/technology-page/Mold08.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 8 end -->
                        <figure>
                            <img src="images/technology-page/Mold09.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 9 end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="page-slider" class="page-slider small-bg">
                        <figure>
                            <img src="images/technology-page/Moldex3DCAE.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 1 end -->
                        <figure>
                            <img src="images/technology-page/NXCAD.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 2 end -->
                        <figure>
                            <img src="images/technology-page/NXCAM.jpg"
                                style="padding-top: 0; width: 100%; height: 100%;">
                        </figure><!-- Item 3 end -->
                    </div>
                </div>
    </section>

    <?php include("footer.php"); ?>
</body>

</html>