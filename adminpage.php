<?php
/**
 * Created by PhpStorm.
 * User: dharmy-ko
 * Date: 8/1/2018
 * Time: 4:23 AM
 */

session_start();
require_once ("connection.php");
require_once("class.user.php");

//$logged_in = isset($_SESSION['custid']);
//
//
//
//if (!$logged_in) {
//    header("location:login.php");
//}

$obj = new User();
$userid = $_SESSION['staff_id'];
$fname = $obj->firstname($_SESSION['fname']);
$lname = $obj->lastname($_SESSION['lname']);

$num = $obj->mobilenumber($_SESSION['phone_num']);

if (isset($_SESSION['userid'])) {
    $query  = "SELECT * FROM user";

    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
    }else {
            die("Database query failed. " . mysqli_error($connection));
        }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-left: 50px">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Brand
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-right: 50px">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Account
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">SETTINGS</li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="adminuser.php?=<?php echo $userid; ?>">Users</a></li>
            <li><a href="#">Reviews</a></li>
        </ul>
    </div>
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2><?php echo $obj->getFullName(); ?></h2>
                        <p><strong>Staff Number: </strong><?php echo $obj->username($_SESSION['staff_num']); ?></p>
                        <p><strong>Phone number: </strong><?php echo $obj->mobilenumber($_SESSION['phone_num']); ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="users">
    <div class="row">
        <h2>Imperial Hotels</h2>
        <p>Users</p>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>ADDRESS</th>
                <th>GENDER</th>
            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row['firstname']. ' ' .$row['firstname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
