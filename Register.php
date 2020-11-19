<?php
$msg="";
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender= $_POST['gender'];
  $age = $_POST['age'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $event = $_POST['events'];

  $con = mysqli_connect("localhost","root","","events4U");


  mysqli_query($con,"INSERT INTO `event_reg`(`name`, `email`, `gender`, `age`, `address`, `no`, `event_no`)
   VALUES ('$name','$email','$gender','$age','$address','$phone','$event')");

   header('location:thankyou.html');
}
 ?>
