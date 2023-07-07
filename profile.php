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

    <figure>
        <img src="images/profile-page/HeadComPro.jpg" style="padding-top: 0; width: 100%; height: 100%;">
    </figure>

    <section id="main-container" class="main-container" style="padding-bottom: 0px; padding-top: 0;">
        <div class="container ">
            <div class="content col-lg-10 col-md-10 col-sm-10 clearfix about-container" style="padding-bottom: 0px;">
                <div class="text-center">
                    <h2><?php echo $companyProfile ?></h2>
                </div>
                <br>

                <table class="table mt-3">
                    <tr>
                        <th><?php echo $companyname ?></th>
                        <td>
                            <?php echo $companyname1 ?>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo $address ?></th>
                        <td><?php echo $address1 ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $telephone ?></th>
                        <td>02-024-9381-2</td>
                    </tr>
                    <tr>
                        <th><?php echo $fax ?></th>
                        <td>02-024-9383</td>
                    </tr>
                    <tr>
                        <th><?php echo $Tax ?></th>
                        <td>0135550032987</td>
                    </tr>
                    <tr>
                        <th><?php echo $capital ?></th>
                        <td><?php echo $capital1 ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $boice ?></th>
                        <td><?php echo $boice1 ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $typeob ?></th>
                        <td>
                            <li type="number"><?php echo $typeob1 ?></li>
                            <li type="number"><?php echo $typeob2 ?></li>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo $employ ?></th>
                        <td>
                            <?php echo $employ1 ?>
                        </td>
                    </tr>
                    <tr>
                        <th><?php echo $custo ?></th>
                        <td>
                            <?php echo $custo1 ?>
                            <br>
                            <?php echo $custo2 ?>
                            <br>
                            <?php echo $custo3 ?>
                        </td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-6">
                        <img src="images/ISO9001-2015.jpg" style="height: 100%; width:100%;">
                    </div>

                    <div class="col-6">
                        <img src="images/ISO14001.jpg" style="width:100%; height: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
</body>

</html>