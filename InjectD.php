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
                <img src="images/banner/machine/bannerinjectmachine.png"
                    style="padding-top: 0; width: 100%; height: 100%;">
            </figure>

            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-heading">
                                <h1 class="banner-title"
                                    style="background: rgba(255, 255, 255, 0.55);padding: 10px 10px;">
                                    <?php echo $bannermachineinj ?></h1>

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

            <div class="ts-service-box-content">
                <h4 style=" font-size: 28px;"><?php echo $machinetype1 ?></h4>
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
                                <div align="center"><?php echo $techhead4 ?>
                            </th>
                            <th scope="col">
                                <div align="center"><?php echo $techhead3 ?>
                            </th>
                        </tr>
                    </thead>
                    <tr>
                            <th scope="row">1</th>
                            <td colspan="3"><?php echo $techInject1 ?></td>
                            <td><?php echo $MakerIn1 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn1 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject1 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td colspan="3"><?php echo $techInject2 ?></td>
                            <td><?php echo $MakerIn2 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn2 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject2 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="3"><?php echo $techInject3 ?></td>
                            <td><?php echo $MakerIn3 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn3 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject3 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="3"><?php echo $techInject4 ?></td>
                            <td><?php echo $MakerIn4 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn4 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject4 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td colspan="3"><?php echo $techInject5 ?> </td>
                            <td><?php echo $MakerIn5 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn5 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject5 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td colspan="3"><?php echo $techInject6 ?></td>
                            <td><?php echo $MakerIn6 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn6 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject6 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td colspan="3"><?php echo $techInject7 ?></td>
                            <td><?php echo $MakerIn7 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn7 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject7 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td colspan="3"><?php echo $techInject8 ?></td>
                            <td><?php echo $MakerIn8 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn8 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject8 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td colspan="3"><?php echo $techInject9 ?></td>
                            <td><?php echo $MakerIn9 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn9 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject9 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td colspan="3"><?php echo $techInject10 ?></td>
                            <td><?php echo $MakerIn10 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn10 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject10 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td colspan="3"><?php echo $techInject11 ?></td>
                            <td><?php echo $MakerIn11 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn11 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject11 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td colspan="3"><?php echo $techInject12 ?></td>
                            <td><?php echo $MakerIn12 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn12 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject12 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td colspan="3"><?php echo $techInject13 ?></td>
                            <td><?php echo $MakerIn13 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn13 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject13 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td colspan="3"><?php echo $techInject14 ?></td>
                            <td><?php echo $MakerIn14 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn14 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject14 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td colspan="3"><?php echo $techInject15 ?></td>
                            <td><?php echo $MakerIn15 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn15 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject15 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td colspan="3"><?php echo $techInject16 ?></td>
                            <td><?php echo $MakerIn16 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn16 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject16 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td colspan="3"><?php echo $techInject17 ?></td>
                            <td><?php echo $MakerIn17 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn17 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject17 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td colspan="3"><?php echo $techInject18 ?></td>
                            <td><?php echo $MakerIn18 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn18 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject18 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">19</th>
                            <td colspan="3"><?php echo $techInject19 ?></td>
                            <td><?php echo $MakerIn19 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn19 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject19 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td colspan="3"><?php echo $techInject20 ?></td>
                            <td><?php echo $MakerIn20 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn20 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject20 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td colspan="3"><?php echo $techInject21 ?></td>
                            <td><?php echo $MakerIn21 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn21 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject21 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td colspan="3"><?php echo $techInject22 ?></td>
                            <td><?php echo $MakerIn22 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn22 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject22 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td colspan="3"><?php echo $techInject23 ?></td>
                            <td><?php echo $MakerIn23 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn23 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject23 ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">24</th>
                            <td colspan="3"><?php echo $techInject24 ?></td>
                            <td><?php echo $MakerIn24 ?></td>
                            <td>
                                <div align="center"><?php echo $ModelIn24 ?>
                            </td>
                            <td>
                                <div align="center"><?php echo $Countryinject24 ?>
                            </td>
                        </tr>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="main-container" class="main-container" style="padding-top: 0px; padding-bottom: 0px">
        <div class="row">
            <div class="col-lg-4" style="float:none;margin:auto;">
                <div id="page-slider" class="page-slider small-bg center">
                    <figure>
                        <img src="images/InjectionDepartment/InD1.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure><!-- Item 1 end -->

                    <figure>
                        <img src="images/InjectionDepartment/InD2.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure><!-- Item 2 end -->

                    <figure>
                        <img src="images/InjectionDepartment/InD3.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure><!-- Item 3 end -->

                </div><!-- Page slider end-->

            </div><!-- Content row end -->
            <br>
            <div class="col-lg-4" style="float:none;margin:auto;">
                <div id="page-slider" class="page-slider small-bg">
                    <figure>
                        <img src="images/InjectionDepartment/InD4.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure><!-- Item 4 end -->

                    <figure>
                        <img src="images/InjectionDepartment/InD5.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure><!-- Item 5 end -->

                    <figure>
                        <img src="images/InjectionDepartment/InD6.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure><!-- Item 6 end -->

                    <figure>
                        <img src="images/InjectionDepartment/InD5.jpg"
                            style="padding-top: 0; width: 100%; height: 100%;">
                    </figure><!-- Item 7 end -->
                </div><!-- Page slider end-->
            </div><!-- Col end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->



    <?php include("footer.php"); ?>
</body>

</html>