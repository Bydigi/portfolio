<?php
$name       = "";
$mailFrom   = "";
$message    = "";
$mailTo     = "diyarpolat@icloud.com";

if (isset ($_POST ['submit'])){

// Name
$name = strip_tags ($_POST['name']);
$name = ucfirst (strtolower($name));

// Email
$mailFrom = strip_tags ($_POST['email']);
$mailFrom = str_replace(' ', '', $mailFrom);
$mailFrom = ucfirst(strtolower($mailFrom));

// Message
$message = strip_tags ($_POST['message']);
$message = ucfirst (strtolower($message));

$headers    = "From: ".$mailFrom;
$txt        = "You have received an email from: ".$name.".\n\n".$message;

mail ($mailTo, $txt, $headers);


}



?>