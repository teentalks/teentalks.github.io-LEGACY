<!DOCTYPE html5>
<html>
<?php
   $admin_email = "kunal.bhat2001@gmail.com";
   $email = $_REQUEST['email'];
   $subject="You have been invited for a talk";
   $schoolname=$_REQUEST["organname"];
   $name=$_REQUEST["name"];
   $address=$_REQUEST["address"];
   $urladrr=$_REQUEST["mapsurl"];
   $message="Schoolname = ";
    
    mail($admin_email, "$subject", $message, "From:" . $email);
?>
</html>