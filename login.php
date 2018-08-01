<?php
session_start();
require_once ("connection.php");
//require_once("account.php");
require_once("class.user.php");

$obj = new User();



if (isset($_POST['submit'])) {
    $username = $obj->username($_POST['username']);
    $pass = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";

    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['fname'] = $row['firstname'];
        $_SESSION['lname'] = $row['lastname'];
        $_SESSION['uname'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone_num'] = $row['phone_number'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['gender'] = $row['gender'];
        $dbpass = $row['password'];
        $newid = $_SESSION['custid'] = $row['user_id'];


        if ($check = password_verify($pass, $dbpass)) {
            $obj->redirect_to("userpage.php?id=$newid");
        } else {
            echo "<script>
                    alert('Incorrect Password');
                    window.location.href='login.php';
                    </script>";
        }
    } else {
        echo "<script>
                    alert('Username not found');
                    window.location.href='index.php';
                    </script>";
    }


}



?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <form id="loginform" class="form-horizontal" role="form" method="post" action="login.php">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username"  placeholder="username">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>



                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <input type="submit" class="btn btn-success" name="submit" value="Login">

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account!
                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--    <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">-->
<!--        <div class="panel panel-info">-->
<!--            <div class="panel-heading">-->
<!--                <div class="panel-title">Sign Up</div>-->
<!--                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>-->
<!--            </div>-->
<!--            <div class="panel-body" >-->
<!--                <form id="signupform" class="form-horizontal" role="form">-->
<!---->
<!--                    <div id="signupalert" style="display:none" class="alert alert-danger">-->
<!--                        <p>Error:</p>-->
<!--                        <span></span>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="email" class="col-md-3 control-label">Email</label>-->
<!--                        <div class="col-md-9">-->
<!--                            <input type="text" class="form-control" name="email" placeholder="Email Address">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label for="firstname" class="col-md-3 control-label">First Name</label>-->
<!--                        <div class="col-md-9">-->
<!--                            <input type="text" class="form-control" name="firstname" placeholder="First Name">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="lastname" class="col-md-3 control-label">Last Name</label>-->
<!--                        <div class="col-md-9">-->
<!--                            <input type="text" class="form-control" name="lastname" placeholder="Last Name">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="password" class="col-md-3 control-label">Password</label>-->
<!--                        <div class="col-md-9">-->
<!--                            <input type="password" class="form-control" name="passwd" placeholder="Password">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label for="icode" class="col-md-3 control-label">Invitation Code</label>-->
<!--                        <div class="col-md-9">-->
<!--                            <input type="text" class="form-control" name="icode" placeholder="">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <!-- Button -->-->
<!--                        <div class="col-md-offset-3 col-md-9">-->
<!--                            <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>-->
<!--                            <span style="margin-left:8px;">or</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">-->
<!--                        <div class="col-md-offset-3 col-md-9">-->
<!--                            <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
</body>
</html>