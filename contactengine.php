<?php

$EmailFrom = Trim(stripslashes($_POST['Email']));

$EmailTo = "mazienakhro@gmail.com";
$Subject = "Nagasarising website users message";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (empty($Name)) {
echo'<script>alert(" Name is required")</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactme.html\">";
  exit;


} 
else if (empty($Email)) {
echo'<script>alert("Email is required")</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactme.html\">";
  exit;
} 


else{

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

}// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");


// redirect to success page 
if ($success){
echo'<script>alert(" Thanks for your message!!! I will contact you soon")</script>';

  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactme.html\">";
}

else{
echo'<script>alert(" Error!!! please try again")</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactme.html\">";
}

?>