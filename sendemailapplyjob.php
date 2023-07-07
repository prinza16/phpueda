<?php  
require("PHPMailer_v5.1/class.phpmailer.php"); 
try {
        $Fullname  =  $_GET['Fullname'];
        $Position  =  $_GET['Position'];
        $Emailapplyjob  =  $_GET['Emailjob'];
        $Tel       =  $_GET['Tel'];
        $Introduce =  $_GET['Introduce'];
        $email = "mail.japansystem.co.th";
        $mail = new PHPMailer();
        $mail->IsSMTP();         
        $mail->CharSet = "utf-8";  // ในส่วนนี้ ถ้าระบบเราใช้ tis-620 หรือ windows-874 สามารถแก้ไขเปลี่ยนได้                        
        $mail->Host     = "mail.japansystem.co.th"; //  mail server ของเรา
        $mail->SMTPAuth = true;     //  เลือกการใช้งานส่งเมล์ แบบ SMTP
        $mail->Username = "jat_log@japansystem.co.th";   //  account e-mail ของเราที่ต้องการจะส่ง
        $mail->Password = "g0cxo:ulg9H,23"; 
    
        $mail->From     = "jat_log@japansystem.co.th";  //  account e-mail ของเราที่ใช้ในการส่งอีเมล
        $mail->FromName = "Admin Website Ueda"; //  ชื่อผู้ส่งที่แสดง เมื่อผู้รับได้รับเมล์ของเรา
        $mail->addAddress('wachirapan.s@japansystem.co.th', 'ฝ่ายขาย');            // Email ปลายทางที่เราต้องการส่ง(ไม่ต้องแก้ไข)
        $mail->IsHTML(true);                  // ถ้า E-mail นี้ มีข้อความในการส่งเป็น tag html ต้องแก้ไข เป็น true
        $mail->Subject = "ALERT Contact Page ";
        $htmlContent = '<h3>This person contact you </h3> 
        <table "width: 100%;"> 
        <tr> 
          <th>Fullname : </th>
          <td>'.$Fullname.'</td> 
        </tr> 
        <tr > 
          <th>Position : </th>
          <td>'.$Position.'</td> 
        </tr> 
        <tr> 
          <th>Emailjob : </th>
          <td>'.$Emailapplyjob.'</td> 
        </tr> 
		<tr> 
		<th>Tel : </th>
		<td>'.$Tel .'</td> 
	  	</tr> 
      <tr> 
		<th>Introduce : </th>
		<td>'.$Introduce .'</td> 
	  	</tr> 
        </table> '; 
        $mail->Body = $htmlContent ;
        $mail->send();
        include "applying.php";
        //  header('Location: Contact.php');
        echo '<script type="text/javascript">';
echo ' alert("Your message has been sent!")';  //not showing an alert box.
echo '</script>'; 
   
 
     
} catch (Exception $e) {
    echo "EX";
}
  
?>