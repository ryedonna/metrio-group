<?php
extract($_POST);
extract($_GET);
$to      = 'info@metrio.com.my';//soon.hung.fu@mahsing.com.my 
$headers = 'From: '.$email."\r\n";
/*$headers .= 'Cc: agznness.ang@mahsing.com.my'."\r\n";*/

$message = date("Y-m-d H:i:s")."\n
Name : ".$name."\n
Email Address : ".$email."\n
subject : ".$subject."\n
message : ".$message."\n";
//$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");$txt = $message;fwrite($myfile, $txt);fclose($myfile);
mail($to, $subject, $message, $headers);
$to2      = $email;
$subject2 = 'Metrio Group email Enquiry';
$headers2 = 'From: info@metrio.com.my'."\r\n";
/*$headers .= 'Cc: yuyukilch@hotmail.com'."\r\n";*/

$message2 = "Thank you for registering with us, Metrio Group. Our sales person will contact with you within 3 working days.";
mail($to2, $subject2, $message2, $headers2);
//window.open("https://wa.me/85264522442");
echo "OK";


?>
