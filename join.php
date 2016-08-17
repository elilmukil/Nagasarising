<?php

$EmailFrom = Trim(stripslashes($_POST['Email']));
$EmailTo1 = "mazienakhro@gmail.com";
$EmailTo2 = "mail2d.vignesh@gmail.com";
$Subject = "member joined the campaign";
 
$Email = Trim(stripslashes($_POST['Email'])); 


// validation
$validationOK=true;

if (empty($EmailFrom)) {
echo'<script>alert(" Email_id is required")</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
  exit;


} 
else{
// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
}
// send email 
$success1 = mail($EmailTo1, $Subject, $Body, "From: <$EmailFrom>");
$success2 = mail($EmailTo2, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success1){
echo'<script>alert(" Thanks for Joining the Campaign!!!")</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else{
echo'<script>alert(" Error!!! please, try again!!!")</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}

?>