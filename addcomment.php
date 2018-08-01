<?php
session_start();
require_once ("connection.php");
require_once("class.user.php");

$obj = new User();
$userid = $_SESSION['custid'];
$fname = $obj->firstname($_SESSION['fname']);
$lname = $obj->lastname($_SESSION['lname']);
$user = $obj->username($_SESSION['uname']);
$add = $obj->address($_SESSION['address']);
$email = $obj->email($_SESSION['email']);
$num = $obj->mobilenumber($_SESSION['phone_num']);

if (isset($_POST['submit'])) {
    $com = $_POST['comment'];

    $query = "INSERT INTO review (firstname, lastname, comment, user_id) ";
    $query .= "VALUES ('$fname', '$lname', '$com', $userid)";

    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    $obj->redirect_to("userpage.php?id=$userid");

}