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

$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	$programming_languages = '';
	foreach($_POST["programming_languages"] as $row)
	{
		$programming_languages .= $row . ', ';
	}
	$programming_languages = substr($programming_languages, 0, -2);
	$path = 'upload/' . $_FILES["resume"]["name"];
	move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
	$message = '
		<h3 align="center">Apply Job</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">'.$_POST["name"].'</td>
			</tr>
			<tr>
				<td width="30%">Address</td>
				<td width="70%">'.$_POST["address"].'</td>
			</tr>
			<tr>
				<td width="30%">Email Address</td>
				<td width="70%">'.$_POST["email"].'</td>
			</tr>
			<tr>
				<td width="30%">Position Required</td>
				<td width="70%">'.$programming_languages.'</td>
			</tr>
			
			<tr>
				<td width="30%">Phone Number</td>
				<td width="70%">'.$_POST["mobile"].'</td>
			</tr>
			<tr>
				<td width="30%">Additional Information</td>
				<td width="70%">'.$_POST["additional_information"].'</td>
			</tr>
		</table>
	';
	
	require 'class/class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();								//Sets Mailer to send message using SMTP
	$mail->CharSet= "utf-8";
	$mail->Host = 'mail.uedaindustry.co.th';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
	$mail->Port = '25';								//Sets the default SMTP server port
	$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
	$mail->Username = 'webmail@uedaindustry.co.th';					//Sets SMTP username
	$mail->Password = 'U@938/18ed';					//Sets SMTP password
	$mail->SMTPSecure = 'none';							//Sets connection prefix. Options are "", "ssl" or "tls"
	$mail->From = $_POST["email"];					//Sets the From email address for the message
	$mail->FromName = $_POST["name"];				//Sets the From name of the message
	$mail->AddAddress('thantika@uedaindustry.co.th');
    $mail->AddAddress('hr.training@uedaindustry.co.th');		               
	$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
	$mail->IsHTML(true);							//Sets message type to HTML
	$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
	$mail->Subject = 'Job Application Page';				//Sets the Subject of the message
	$mail->Body = $message;							//An HTML or plain text message body
	if($mail->Send())								//Send an Email. Return true on success or false on error
	{
		$message = '<div class="alert alert-success">Application Successfully Sent</div>';
		unlink($path);
	}
	else
	{
		$message = '<div class="alert alert-danger">There is an Error</div>';
	}
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
            <img src="images/banner/contact/headJobApp.jpg" style="padding-top: 0;">
        </figure>
    </div><!-- Banner area end -->


    <section id="main-container" class="main-container" style="padding-left: 0px; padding-top: 0px;padding-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin: auto;">
                    <h3 class="column-title"><?php echo $applyjobhead ?></h3>
                    <?php print_r($message); ?>
					<form method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><?php echo $applyjobname ?></label>
									<input type="text" name="name" placeholder="<?php echo $applyjobname ?>" class="form-control" required />
								</div>
								<div class="form-group">
									<label><?php echo $applyjobaddress ?></label>
									<textarea name="address" placeholder="<?php echo $applyjobaddress ?>" class="form-control" required></textarea>
								</div>
								<div class="form-group">
									<label><?php echo $applyjobemail ?></label>
									<input type="email" name="email" class="form-control" placeholder="<?php echo $applyjobemail ?>" required />
								</div>
								<div class="form-group">
									<label><?php echo $applyjobPosition ?></label>
                                    <input type="text" name="programming_languages[]" class="form-control" placeholder="<?php echo $applyjobPosition ?>" required />
									
								</div>
								
							</div>
							<div class="col-md-12">
								<!-- <div class="form-group">
									<label>Select Year of Experience</label>
									<select name="experience" class="form-control" required>
										<option value="">Select Experience</option>
										<option value="0-1 years">0-1 years</option>
										<option value="2-3 years">2-3 years</option>
										<option value="4-5 years">4-5 years</option>
										<option value="6-7 years">6-7 years</option>
										<option value="8-9 years">8-9 years</option>
										<option value="10 or more years">10 or more years</option>
									</select>
								</div> -->
								<div class="form-group">
									<label><?php echo $applyjobmobile ?></label>
									<input type="text" name="mobile" placeholder="<?php echo $applyjobmobile ?>" class="form-control" pattern="\d*" required />
								</div>
								<div class="form-group">
									<label><?php echo $applyjobResume ?></label>
									<input type="file" name="resume" accept=".doc,.docx, .pdf" required />
								</div>
								<div class="form-group">
									<label><?php echo $applyjobAdditional ?></label>
									<textarea name="additional_information" placeholder="<?php echo $applyjobAdditional ?>" class="form-control" required rows="5"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group" align="center">
							<input type="submit" name="submit" value="Submit" class="btn btn-info" />
						</div>
					</form>








    </section><!-- Main container end -->



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
    var Name = "";
    var Email = "";
    var Tel = "";
    var Message = "";
    var file = "";
    var link = "";
    $('#sendDownload').click(function() {
        Company = document.getElementById("Company").value;
        Name = document.getElementById("Name").value;
        Email = document.getElementById("Email").value;
        Tel = document.getElementById("Tel").value;
        Message = document.getElementById("Message").value;
        file = document.getElementById("file").value;
        if (Company != "" && Name != "" && Email != "" && Tel != "" && Message != "" && file != "" && isEmail(
                Email)) {
            event.preventDefault();
            link += "sendemailapplyjob.php?Company=" + Company + "&Name=" + Name + "&Email=" + Email +
                "&Tel=" + Tel + "&Message=" + Message + "&file=" + file;
            //alert(link);
            $('.subcribe-form').attr('action', document.location.href = link);
        }





    });

});
</script>

</html>