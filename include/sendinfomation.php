

<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $subject = "New User Form Information";
  $formcontent="From: ShinXL Website \n Subject: New User Form Information \n Message: Check The User Information \n User Name : $name  \n User Email : $email \n User Number : $number";
  $recipient = "web@shynxl.com";
  $mailheader = "From: $email \r\n";

  if(empty($name) || empty($email) || empty($number)){
    echo '<script type="text/javascript">'; 
    echo 'alert("Please check all. information is missing ...");'; 
    echo 'window.location = "index.php";';
    echo '</script>';
  }else{
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo '<script type="text/javascript">'; 
    echo 'alert("Thank you. Successfully Submit your information ...");'; 
    echo 'window.location = "index.php";';
    echo '</script>';
  }

?>
