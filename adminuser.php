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

$logged_in = isset($_SESSION['custid']);



if (!$logged_in) {
    header("location:login.php");
}

$obj = new User();
$userid = $_SESSION['staff_id'];


$adminquery = "SELECT * FROM admin WHERE admin_id = $userid";
$adminresult = mysqli_query($connection, $adminquery);
$adminrow = mysqli_fetch_assoc($adminresult);
$fname = $obj->firstname($adminrow['firstname']);
$lname = $obj->lastname($adminrow['lastname']);

$num = $obj->mobilenumber($_SESSION['phone_num']);


    $query  = "SELECT * FROM user";

    $result = mysqli_query($connection, $query);





?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/adminstyle.css">
    <link rel="stylesheet" type="text/css" href="css/userdropstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/userdrop.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin: 10px;">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Account
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="adminuser.php?=<?php echo $userid; ?>">Home</a></li>
            <li><a href="adminreview.php?=<?php echo $userid; ?>">Reviews by Date</a></li>
            <li><a href="adminuser_review.php?=<?php echo $userid; ?>">Reviews by User</a></li>
        </ul>
    </div>
    <div class="col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2><?php echo $obj->getFullName(); ?></h2>
                        <p><strong>Staff Number: </strong><?php echo $obj->username($adminrow['staff_number']); ?></p>
                        <p><strong>Phone number: </strong><?php echo $obj->mobilenumber($adminrow['phone_number']); ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="well span10 offset2">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <div class="row-fluid user-row">
            <div class="span1">
                <img class="img-circle"
                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                     alt="User Pic">
            </div>
            <div class="span10">
                <strong><?php echo $row['username']; ?></strong><br>
<!--                <span class="text-muted">User level: Administrator</span>-->
            </div>
            <div class="span1 dropdown-user" data-for=".<?php echo $row['username']; ?>">
                <i class="icon-chevron-down text-muted"></i>
            </div>
        </div>
            <div class="row-fluid user-infos <?php echo $row['username']; ?>">
                <div class="span10 offset1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">User information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row-fluid">
                                <div class="span3">
                                    <img class="img-circle"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                         alt="User Pic">
                                </div>
                                <div class="span6">
                                    <strong><?php echo $row['firstname']. ' ' .$row['firstname']; ?></strong><br>
                                    <table class="table table-condensed table-responsive table-user-information">
                                        <tbody>
                                        <tr>
                                            <td>Email:</td>
                                            <td><?php echo $row['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td><?php echo $row['address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Reviews</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td><?php echo $row['phone_number']; ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn  btn-primary" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Send message to user"><i class="icon-envelope icon-white"></i></button>
                            <span class="pull-right">
                            <button class="btn btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="icon-edit icon-white"></i></button>
                            <button class="btn btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="icon-remove icon-white"></i></button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
</div>
<script>
    $(document).ready(function() {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        //Click dropdown
        panelsButton.click(function() {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);

            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function() {
                //Completed slidetoggle
                if(idFor.is(':visible'))
                {
                    currentButton.html('<i class="icon-chevron-up text-muted"></i>');
                }
                else
                {
                    currentButton.html('<i class="icon-chevron-down text-muted"></i>');
                }
            })
        });


        $('[data-toggle="tooltip"]').tooltip();

        $('button').click(function(e) {
            e.preventDefault();
            alert("This is a demo.\n :-)");
        });
    });
</script>
</body>
</html>
