<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'online shopping management system');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
 
// for username availblty
public function usernameavailblty($customer_Email_ID) {
$result =mysqli_query($this->dbh,"SELECT customer_Email_ID FROM customer WHERE customer_Email_ID='$customer_Email_ID'");
return $result;
 
}
// Function for signin
public function signin($customer_Email_ID, $customer_password)
	{
	$result=mysqli_query($this->dbh,"select id,FullName from tblusers where Username='$customer_Email_ID' and Password='$customer_password'");
	return $result;
	}
}
?>