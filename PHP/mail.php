<?php

$EmailFrom = "chriscoyier@gmail.com";
$EmailTo = "dkiefer96@gmail.com";
$Subject = "Sent from contact form";
$Name = Trim(stripslashes($_POST['Name']));
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
	/*print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";--> */
  echo "error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  /*<!--print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";-->*/
  echo"Sucess";
}
else{
  /*<!--print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";-->*/
  echo "error";
}
?>