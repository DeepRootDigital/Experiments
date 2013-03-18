<?php
function send_email() {
/* Nicks Mailer Program V1.0 */
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  $mainoptions = get_option('main_theme_options');
  //send email
  $fromemail = $_REQUEST['email'];
  $toaddress = $mainoptions['emailaddress'];
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  $subject = 'Feasibility Study Request';
  $message = $name.' has submitted a call request at the number '.$phone.'.';
  mail($toaddress, $subject,
  $message, "From:" . $fromemail);
  }
}
?>