<?php 
$name = $_REQUEST["nameslider"];
$email = $_REQUEST["emailslider"];
$phone = $_REQUEST["phoneslider"];
$industry = $_REQUEST["industryslider"];
$randp = $_REQUEST["randp"];
$branding = $_REQUEST["branding"];
$bisdev = $_REQUEST["bisdev"];
$webdev = $_REQUEST["webdev"];
$marketing = $_REQUEST["marketing"];
$message = $_REQUEST["messageslider"];
$formcontent="From: ".$name."\r\nE-mail: ".$email."\r\nPhone Number: ".$phone."\r\nIndustry: ".$industry."\r\n\r\nResearch and Planning? ".$randp."\r\nBranding? ".$branding."\r\nBusiness Development? ".$bisdev."\r\nWeb Development? ".$webdev."\r\nMarketing? ".$marketing."\r\n\r\nMessage: \r\n".$message;
mail('admin@businessonmarketst.com','Business Inquiry',$formcontent) or die("Error!");
header('Location: http://www.businessonmarketst.com');
?>