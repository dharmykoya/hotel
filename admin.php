<?php
/**
 * Created by PhpStorm.
 * User: dharmy-ko
 * Date: 8/1/2018
 * Time: 3:59 AM
 */

session_start();
require_once ("connection.php");
require_once("class.user.php");

$obj = new User();


if (isset($_POST['submit'])) {
    $staff_num = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM admin WHERE staff_number = $staff_num";

    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['fname'] = $row['firstname'];
        $_SESSION['lname'] = $row['lastname'];
        $_SESSION['staff_num'] = $row['staff_number'];
        $staff_id = $_SESSION['staff_id'] = $row['admin_id'];
        $_SESSION['phone_num'] = $row['phone_number'];
        $dbpass = $row['password'];

        if ($pass = $dbpass) {
            $obj->redirect_to("adminuser.php?id=$staff_id");
        } else {
            echo "<script>
                    alert('Incorrect Password');
                    window.location.href='index.php';
                    </script>";
        }

    } else {
        die("Database query failed. " . mysqli_error($connection));
    }
}