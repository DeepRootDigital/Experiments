<?php
 $to = 'nick';
 $moneywant = 30000;
 $subject = 'awesomesauce';
 $message = 'i did not have sexual relations with that woman' . $moneywant / 2;
 $from = 'nickbusinessonmarketst.com';
 $headers = 'From:'. $from;
 mail($to, $headers, $message, $headers);
 
 
 
?>
