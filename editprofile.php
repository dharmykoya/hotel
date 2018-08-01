<?php
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
    $fname = $obj->firstname($_POST['fname']);
    $lname = $obj->lastname($_POST['lname']);
    $pnum = $obj->mobilenumber($_POST['pnumber']);
    $add = $obj->address($_POST['address']);


    $query  = "UPDATE user SET firstname = '$fname', lastname = '$lname', phone_number = $pnum, address = '$add' ";
    $query .= "WHERE user_id = $userid";
//    $query .= "VALUES ('$fname', '$lname', $pnum, '$add', '$gender')";


    $result = mysqli_query($connection, $query);


    if ($result) {
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['phone_num'] = $pnum;
        $_SESSION['address'] = $add;
        $obj->redirect_to("userpage.php?id=$userid");

    } else {
        echo "<script>
                    alert('operation Unsuccessful');
                    window.location.href='userpage.php?id=$userid';
                    </script>";
    }
}