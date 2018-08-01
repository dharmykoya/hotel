<?php
/**
 * Created by PhpStorm.
 * User: dharmy-ko
 * Date: 8/1/2018
 * Time: 1:18 AM
 */

session_start();


if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
    header("location:index.php");
}
session_destroy();
header("location:index.php");