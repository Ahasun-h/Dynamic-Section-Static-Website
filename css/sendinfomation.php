<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $subject = 'New User Form Information';
  $formcontent="From: ShinXL Website \n Subject: New User Form Information \n Message: Check The User Information \n User Name : $name  \n User Email : $email \n User Number : $number";
  $recipient = "web@shynxl.com";
  $mailheader = "From: $email \r\n";

  if(empty($name) || empty($email) || empty($number)){
      ?> 
      <script type="text/javascript">
      swal({
  title: "Fields Empty!",
  text: "Please check the missing field!",
  icon: "warning",
  button: "Ok",
});
      window.location.href = "index.php";
      </script>
      <?php
    // header('location:error_dialog.php?error');

  }else{
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    header('location:Success_Dialog.php?error');  
  }

?>