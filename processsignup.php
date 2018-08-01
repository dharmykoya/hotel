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

if (isset($_POST['submit'])) {
    $fname = $obj->firstname($_POST['fname']);
    $lname = $obj->lastname($_POST['lname']);
    $email = $obj->email($_POST['email']);
    $username = $obj->username($_POST['username']);
    $pass = password_hash(mysqli_real_escape_string($connection, $obj->password($_POST['password'])), PASSWORD_DEFAULT);
    $conpass = password_hash(mysqli_real_escape_string($connection, $obj->password($_POST['confirmpassword'])), PASSWORD_DEFAULT);
    $pnum = $obj->mobilenumber($_POST['pnumber']);
    $add = $obj->address($_POST['address']);
    $gen = $_POST['gender'];
    if ($gender = "Male") {
        $gender = $obj->gender($gen);
    }
    if ($gender = "Male"){
        $gender = $obj->gender($gen);
    }

    $query  = "INSERT INTO user (firstname, lastname, email, username, password, confirmpassword, phone_number, address, gender) ";
    $query .= "VALUES ('$fname', '$lname', '$email', '$username', '$pass', '$conpass', $pnum, '$add', '$gender')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        $_SESSION['uname'] = $username;
        $obj->redirect_to("login.php");
    }
}