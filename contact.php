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

    <div id="banner-area" class="banner-area">
        <figure>
            <img src="images/banner/contact/HeadContact.jpg" style="padding-top: 0; width: 100%; height: 100%;">
        </figure>
    </div><!-- Banner area end -->

    <figure style="text-align: center">
        <img src="images/contact-page/CONTACTUpdate.jpg" style="padding-top: 0; width: 70%; height: 70%;">
    </figure>

    <section id="main-container" class="main-container" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="column-title"><?php echo $htextContact ?></h3>

                    <form class="subcribe-form" method="post">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo $titleContact1 ?> <span style="color:red;"> * </span></label>
                                    <input class="form-control form-control-name" name="Company" id="Company"
                                        placeholder="" type="text" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo $titleContact5 ?> <span style="color:red;"> * </span></label>
                                    <input class="form-control form-control-name" name="tel" id="tel" placeholder=""
                                        type="tel" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo $titleContact2 ?> <span style="color:red;"> * </span></label>
                                    <input class="form-control form-control-subject" name="Name" id="Name"
                                        placeholder="" type="text" autocomplete="off" required>
                                </div>
                            </div>

                        </div> <!-- end row 1 -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><?php echo $titleContact3 ?> <span style="color:red;"> * </span></label>
                                    <input class="form-control form-control-email" name="Email" id="Email"
                                        placeholder="" type="email" autocomplete="off" required>
                                </div>
                            </div>

                        </div> <!-- end row 2 -->


                        <div class="form-group">
                            <label><?php echo $titleContact4 ?></label>
                            <textarea class="form-control form-control-message" name="Message" id="Message"
                                placeholder="" rows="10" autocomplete="off" required></textarea>
                        </div>
                        <div class="text-right">
                            <!-- <input  class="btn btn-primary" type="submit" name="submit" value="Submit" style="width: 100px; height: 40px;"> -->
                            <input class="btn btn-primary" id="sendDownload" type="Submit"
                                style="width: 100px; height: 40px;">
                        </div>
                    </form>
                </div>
                <br>

                <div class="col-md-6">
                    <div class="gap-60"></div>
                    <div class="gap-60"></div>
                    <div class="col-md-12">
                        <div class="ts-service-box-bg text-center h-100">
                            <span class="ts-service-icon icon-round">
                                <i class="fas fa-map-marker-alt mr-0"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h4><?php echo $visit ?></h4>
                                <p><?php echo $infovisit ?></p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-md-12">
                        <div class="ts-service-box-bg text-center h-100">
                            <span class="ts-service-icon icon-round">
                                <i class="fa fa-phone-square mr-0"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h4><?php echo $Call ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Content row -->
            <div class="gap-60"></div>
    </section><!-- Main container end -->
    <div class="col-md-8" style="margin: auto;">
        <div class="map-responsive">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.7518598341776!2d100.60031731483426!3d14.091820190128098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e27f6f813a1d09%3A0xdcff7579963ca10e!2sUEDA%20INDUSTRY(THAILAND)%20CO.%2CLTD.!5e0!3m2!1sth!2sth!4v1679299745550!5m2!1sth!2sth"
                width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
    </div>


    <div class="gap-60"></div>

    <?php include("footer.php"); ?>
</body>
<script>
function isEmail(email) {
    var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return EmailRegex.test(email);
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    var Company = "";
    var tel = "";
    var Name = "";
    var Email = "";
    var Message = "";
    var link = "";
    $('#sendDownload').click(function() {
        Company = document.getElementById("Company").value;
        tel = document.getElementById("tel").value;
        Name = document.getElementById("Name").value;
        Email = document.getElementById("Email").value;
        Message = document.getElementById("Message").value;
        if (Company != "" && tel != "" && Name != "" && Email != "" && Message != "" && isEmail(
                Email)) {
            event.preventDefault();
            link += "sendemailcontact.php?Company=" + Company + "&tel=" + tel + "&Name=" + Name +
                "&Email=" + Email +
                "&Message=" + Message;
            //alert(link);
            $('.subcribe-form').attr('action', document.location.href = link);
        }





    });

});
</script>

</html>