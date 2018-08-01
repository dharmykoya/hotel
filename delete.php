<?php
/**
 * Created by PhpStorm.
 * User: dharmy-ko
 * Date: 8/1/2018
 * Time: 2:25 AM
 */

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

if (isset($_POST['delete'])) {

    $review_id = $_POST['rev_id'];
    $delquery = "DELETE FROM review WHERE review_id = $review_id LIMIT 1";
    $delres = mysqli_query($connection, $delquery);


    if ($delres) {
        echo "<script>
                    alert('Delete Successful');
                    window.location.href='userpage.php?id=$userid';
                    </script>";
    } else {
        die("Database query failed. " . mysqli_error($connection));
    }
}