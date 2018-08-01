<?php
///**
// * Created by PhpStorm.
// * User: dharmy-ko
// * Date: 8/1/2018
// * Time: 2:25 AM
// */
//
//session_start();
//require_once ("connection.php");
//require_once("class.user.php");
//
//$obj = new User();
//$userid = $_SESSION['custid'];
//$fname = $obj->firstname($_SESSION['fname']);
//$lname = $obj->lastname($_SESSION['lname']);
//$user = $obj->username($_SESSION['uname']);
//$add = $obj->address($_SESSION['address']);
//$email = $obj->email($_SESSION['email']);
//$num = $obj->mobilenumber($_SESSION['phone_num']);
//
//if (isset($_POST['delete'])) {
////    $review_id = $_SESSION['rev_id'];
//    $review_id = $_POST['rev_id'];
//    $delquery = "DELETE FROM review WHERE review_id = $review_id LIMIT 1";
//    $delres = mysqli_query($connection, $delquery);
//
//
//    if ($delres) {
//        echo "<script>
//                    alert('Delete Successful');
//                    window.location.href='userpage.php?id=$userid';
//                    </script>";
//    } else {
//        die("Database query failed. " . mysqli_error($connection));
//    }
//}


/**
 * Created by PhpStorm.
 * User: dharmy-ko
 * Date: 7/31/2018
 * Time: 2:57 PM
 */
session_start();
require_once ("connection.php");
//require_once("account.php");
require_once("class.user.php");

$obj = new User();
$userid = $_SESSION['custid'];


if (isset($_POST['submit'])) {
    $comment = $obj->getcomment($_POST['comment']);
    $review_id = $_POST['rev_id'];


    $query  = "UPDATE review SET comment = '$comment' ";
    $query .= "WHERE review_id = $review_id LIMIT 1";

    var_dump($query);



    $result = mysqli_query($connection, $query);


//    if ($result) {
//        $obj->redirect_to("userpage.php?id=$userid");
//
//    } else {
//        echo "<script>
//                    alert('operation Unsuccessful');
//                    window.location.href='userpage.php?id=$userid';
//                    </script>";
//    }
}