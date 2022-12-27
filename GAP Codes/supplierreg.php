<?php
$con = mysqli_connect("localhost","root","","online shopping management system");
    $company_name = $_POST['company_name'];
	$supplier_Email_ID = $_POST['supplier_Email_ID'];
	$supplier_Contact = $_POST['supplier_Contact'];
	$supplier_Address = $_POST['supplier_Address'];
	$supplier_password = $_POST['supplier_password'];
    $query = "INSERT INTO supplier (company_name,supplier_Email_ID,supplier_Contact,supplier_Address,supplier_password) VALUES ('$company_name','$supplier_Email_ID','$supplier_Contact','$supplier_Address','$supplier_password')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location: supplierform.html");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location: supplierform.html");
    }
?>