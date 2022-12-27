<?php
session_start();
include_once('function.php');
$usercredentials=new DB_con();
if(isset($_POST['signin']))
{
$customer_Email_ID=$_POST['customer_Email_ID'];
$customer_password=md5($_POST['customer_password']);
$ret=$usercredentials->signin($customer_Email_ID,$customer_password);
$num=mysqli_fetch_array($ret);
if($num>0)
{
  $_SESSION['customer_ID']=$num['customer_ID'];
  $_SESSION['First_Name']=$num['First_Name'];
echo "<script>window.location.href='welcome.php'</script>";
}
else
{
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='signin.php'</script>";
}
}
?>