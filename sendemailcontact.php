<?php  
require("PHPMailer_v5.1/class.phpmailer.php"); 
try {
        $Company =  $_GET['Company'];
        $tel =  $_GET['tel'];
        $Name =  $_GET['Name'];
        $emailuser =  $_GET['Email'];
        $Message =  $_GET['Message'];
        $email = "mail.uedaindustry.co.th";
        $mail = new PHPMailer();
        $mail->IsSMTP();         
        $mail->CharSet = "utf-8";  // ในส่วนนี้ ถ้าระบบเราใช้ tis-620 หรือ windows-874 สามารถแก้ไขเปลี่ยนได้                        
        $mail->Host     = "mail.uedaindustry.co.th"; //  mail server ของเรา
        $mail->SMTPAuth = true;     //  เลือกการใช้งานส่งเมล์ แบบ SMTP
        $mail->Username = "webmail@uedaindustry.co.th";   //  account e-mail ของเราที่ต้องการจะส่ง
        $mail->Password = "U@938/18ed"; 
    
        $mail->From     = "webmail@uedaindustry.co.th";  //  account e-mail ของเราที่ใช้ในการส่งอีเมล
        $mail->FromName = "Uedaindustry"; //  ชื่อผู้ส่งที่แสดง เมื่อผู้รับได้รับเมล์ของเรา
        $mail->addAddress('n-matsumoto@uedaindustry.co.th');            // Email ปลายทางที่เราต้องการส่ง(ไม่ต้องแก้ไข)
        $mail->addAddress('poramin@uedaindustry.co.th');
        $mail->IsHTML(true);                  // ถ้า E-mail นี้ มีข้อความในการส่งเป็น tag html ต้องแก้ไข เป็น true
        $mail->Subject = "Contact Page ";
        $htmlContent = '<h3>This person contact you </h3> 
        <table "width: 100%;"> 
        <tr> 
          <th>Company Name : </th>
          <td>'.$Company.'</td> 
        </tr> 
         <tr> 
          <th>Phone Number : </th>
          <td>'.$tel.'</td> 
        </tr> 
        <tr > 
          <th>Name : </th>
          <td>'.$Name.'</td> 
        </tr> 
        <tr> 
          <th>Email : </th>
          <td>'.$emailuser.'</td> 
        </tr> 
		<tr> 
		<th>Message : </th>
		<td>'.$Message .'</td> 
	  	</tr> 
        </table> '; 
        $mail->Body = $htmlContent ;
        $mail->send();
        include "Contact.php";
        //  header('Location: Contact.php');
        echo '<script type="text/javascript">';
echo ' alert("Your message has been sent!")';  //not showing an alert box.
echo '</script>'; 
   
 
     
} catch (Exception $e) {
    echo "EX";
}
  
?>