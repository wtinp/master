<?php

// session_start();

// define("DB_SERVER", "localhost");
// define("DB_USER", "root");
// define("DB_PASSWORD", "");
// define("DB_DATABASE", "userregisteration");

// $connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

// $f_name = $_POST['f_name'];
// $l_name = $_POST['l_name'];
// $p_email = $_POST['p_email'];
// $pwd = $_POST['pwd'];
// $cpwd = $_POST['cpwd'];

// $s = "select * from usertable where f_name = '$f_name' && l_name = '$l_name' && p_email = '$p_email' && pwd = '$pwd' && cpwd = '$cpwd'";

// $result = mysqli_query($connect, $s);

// $num = mysqli_num_rows($result);

// if($num == 1){
//     echo "This email is already registered with us.";
// }else{
//     $reg = "insert into usertable(f_name, l_name, p_email, pwd, cpwd)";
//     mysqli_query($connect, $reg);
//     echo"Registration Successful";
// }

// return $userregisteration[$s] ?? null;

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','userregisteration');

// get the post records
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$p_email = $_POST['p_email'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];
// database insert SQL code
$sql = "INSERT INTO `usertable` (`f_name`, `l_name`, `p_email`, `pwd`, `cpwd`) VALUES ('$f_name', '$l_name', '$p_email', '$pwd', '$cpwd')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registeration Sucessful!";
} else {
    echo "Someone already registered using this email.";
}



?>