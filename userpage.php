<?php

session_start();
require_once ("connection.php");
require_once("class.user.php");

$logged_in = isset($_SESSION['custid']);



if (!$logged_in) {
    header("location:login.php");
}

$obj = new User();
$userid = $_SESSION['custid'];
$fname = $obj->firstname($_SESSION['fname']);
$lname = $obj->lastname($_SESSION['lname']);
$user = $obj->username($_SESSION['uname']);
$add = $obj->address($_SESSION['address']);
$email = $obj->email($_SESSION['email']);
$num = $obj->mobilenumber($_SESSION['phone_num']);



$query  = "SELECT * FROM review WHERE user_id = $userid ORDER BY date DESC";
$result = mysqli_query($connection, $query);







?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/commentstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    <link rel="stylesheet" type="text/css" href="css/profile.css">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<!--    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!--    <!------ Include the above in your HEAD tag ---------->-->
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">LAVENDA HOTELS</a>
        </div>
        <ul class="nav navbar-nav" style="margin-left: 300px;">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li><a href="logout.php" role="button"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well profile">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2><?php echo $obj->getFullName(); ?></h2>
                        <p><strong>Username: </strong><?php echo $obj->username($_SESSION['uname']); ?></p>
                        <p><strong>Email: </strong> <?php echo $obj->email($_SESSION['email']); ?> </p>
                        <p><strong>Address: </strong><?php echo $obj->address($_SESSION['address']); ?> </p>
                        <p><strong>Phone number: </strong><?php echo $obj->mobilenumber($_SESSION['phone_num']); ?> </p>
                        <p><strong>Gender: </strong><?php echo $obj->gender($_SESSION['gender']); ?> </p>
                    </div>
                </div>
                <div class="col-xs-12 divider text-center">
                    <div class="col-xs-12 col-sm-4 emphasis">
                        <button class="btn btn-info btn-block" data-toggle="modal" data-target="#editprofile"><span class="fa fa-user"></span>Edit Profile</button>
                    </div>
                    <div id="editprofile" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Signup</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="editprofile.php" method="post" accept-charset="utf-8" class="form" role="form">
                                        <h4>It's free and always will be.</h4>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control input-lg" placeholder="First Name"  />                        </div>
                                            <div class="col-xs-6 col-md-6">
                                                <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                                        </div>
                                        <input type="text" name="pnumber" value="<?php echo $num; ?>" class="form-control input-lg" placeholder="Mobile Number"  />
                                        <input type="text" name="address" value="<?php echo $add; ?>" class="form-control input-lg" placeholder="Your Address"  />


                                        <br />
                                        <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="submit">
                                            Edit
                                        </button>
                                    </form>
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <h2>My Reviews</h2>
                </div>
                <div class="row">
                    <form class="form-group" method="post" action="addcomment.php">
                        <div class="col-md-10">
                            <input type="text" name="comment" class="form-control" placeholder="Enter Review" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="submit" class="btn btn-primary">Add Review</button>
                        </div>
                    </form>
                </div>
                <div class="row" style="margin-top: 50px">
                    <table class="table">
                        <thead>

                        <th>DATE</th>
                        <th>COMMENT</th>
                        <th>Delete</th>
                        <th>Edit</th>
                        </thead>
                        <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $rev_id = $_SESSION['rev_id'] = $row['review_id'];
                            $comment = $row['comment'];

                            ?>
                            <tr>
                                <td class="col-md-3"><?php
                                    $time = strtotime($row['date']);
                                    $timeview = date('m/d/y g:i A', $time);
                                    echo $timeview;
                                    ?>
                                </td>
                                <td><?php echo $row['comment']; ?></td>
                                <td>
                                     <input type="submit" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editcomment" name="edit" value="EDIT">

                                    <div id="editcomment" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4>Edit Review</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="editcomment.php" method="post">
                                                        <input type="hidden" name="rev_id" value="<?php echo $rev_id; ?>">
                                                        <textarea class="form-control" rows="5" id="comment" name="comment" value="" placeholder="enter review"></textarea>

                                                        <br />
                                                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="submit">
                                                            Edit
                                                        </button>
                                                    </form>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form style="width: 50px;" method="post" action="delete.php">
                                        <input type="hidden" name="rev_id" value="<?php echo $rev_id; ?>">
                                        <button type="submit" name="delete" value="<?php echo $rev_id; ?>" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                                            DELETE
                                        </button>

                                    </form>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</body>
</html>
