<style>
	.feedback-form {
		position: fixed;
		left:0px;
		top:50%;
		background:#ccc;
		opacity:.8;
		max-width:200px;
		text-align:center;
	}
	.feedback-form input[type=text] {
	width:180px;
	}

	.feedback-form textarea {
	max-width:180px;
	margin-top:10px;
	width:180px;
	}
</style>

<div class="feedback-form">
	<form method="GET" action="#">
		<h2>Feedback</h2>
		<input placeholder="subject" name="subject" type="text">
		<textarea placeholder="message" name="message"></textarea>
		<input type="submit">
	</form>
</div>
<?php 
$to = 'nick@businessonmarketst.com';
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$headers = 'From: webmaster@businessonmarketst.com' . "\r\n" .
'Reply-To: webmaster@businessonmarketst.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

if ($message != '') {
	mail($to, $subject, $message, $headers);
}
?>