<link rel="stylesheet" type="text/css" href="css/formstyle.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="processsignup.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Sign Up</legend>
                <h4>It's free and always will be.</h4>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="fname" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lname" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                </div>
                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
                <input type="text" name="username" value="" class="form-control input-lg" placeholder="Your Username"  />
                <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                <input type="password" name="confirmpassword" value="" class="form-control input-lg" placeholder="Confirm Password"  />
                <input type="text" name="pnumber" value="" class="form-control input-lg" placeholder="Mobile Number"  />
                <input type="text" name="address" value="" class="form-control input-lg" placeholder="Your Address"  />


                <label for="acct_type">Gender:</label>

                <label class="radio-inline">
                    <input type="radio" name="gender" value="Male">Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="Female">Female
                </label>
                <br />
                <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="submit">
                    Create my account</button>
            </form>
        </div>
    </div>
</div>
</div>