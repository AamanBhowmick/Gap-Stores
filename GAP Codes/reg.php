<?php
$con = mysqli_connect("localhost","root","","online shopping management system");
    $First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$customer_Email_ID = $_POST['customer_Email_ID'];
	$customer_password = $_POST['customer_password'];
	$Gender = $_POST['Gender'];
	$customer_Contact = $_POST['customer_Contact'];
    $customer_Address = $_POST['customer_Address'];
    $DOB = date('Y-m-d', strtotime($_POST['DOB']));
    $Age = $_POST['Age'];
    $query = "INSERT INTO customer (First_Name,Last_Name,customer_Email_ID,customer_password,DOB,Age,Gender,customer_Contact,customer_Address) VALUES ('$First_Name','$Last_Name','$customer_Email_ID','$customer_password','$DOB','$Age','$Gender','$customer_Contact','$customer_Address')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted";
        header("Location: gaplogin.html");
    }
    else
    {
        $_SESSION['status'] = "Inserting Failed";
        header("Location: gaplogin.html");
    }
?>