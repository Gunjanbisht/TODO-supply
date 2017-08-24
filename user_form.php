<?php
    $con=  mysqli_connect('localhost','root','','user');
   if(!$con)
   {
       mysqli_error();
   }
       else
   {
       echo "connected";
   }
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $mobileNo = $_POST['mobileNo'];
    $emailId = $_POST['emailId'];
    $password = $_POST['password'];
    $q="insert into form(`name`,`gender`,`birthDate`,`mobileNo`,`emailId`,`password`)values('$name','$gender','$birthDate','$mobileNo','$emailId','$password')";                                                                       
    mysqli_query($con,$q);
    mysqli_close($con);
    ?>

