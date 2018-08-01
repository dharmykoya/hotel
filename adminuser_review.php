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


$query  = "SELECT * FROM review ORDER BY user_id";

$result = mysqli_query($connection, $query);





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
            <li><a href="adminuser.php?=<?php echo $userid; ?>">Home</a></li>
            <li><a href="adminreview.php?=<?php echo $userid; ?>">Reviews by Date</a></li>
            <li class="active"><a href="adminuser_review.php?=<?php echo $userid; ?>">Reviews by User</a></li>
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
                        <p><strong>Staff Number: </strong><?php echo $obj->username($adminrow['staff_number']); ?></p>
                        <p><strong>Phone number: </strong><?php echo $obj->mobilenumber($adminrow['phone_number']); ?> </p>
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
                <th>REVIEW</th>
                <th>DATE</th>
                <th>VIEW</th>
            </tr>
            </thead>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['userreview_id'] = $row['user_id'];
                ?>
                <tbody>
                <tr>
                    <td class="col-md-2"><?php echo $row['firstname']. ' ' .$row['lastname']; ?></td>
                    <td class="col-md-6"><?php echo $row['comment']; ?></td>
                    <td class="col-md-2"><?php echo $row['date']; ?></td>
                    <td class="col-md-1">
                        <form method="post" action="adminuser_review.php">
                            <input type="hidden" value="<?php echo $row['user_id']; ?>" name="user_id">
                            <input type="submit" class="btn btn-info btn-sm" value="REVIEWS" name="all_reviews">
                        </form>
                    </td>
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
