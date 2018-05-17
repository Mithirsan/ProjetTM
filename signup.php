<!DOCTYPE html>
<?php include 'admin.php' ?>
<HTML lang="en">
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" >
        <script type="text/javascript" src="JS/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="JS/popper.js"></script>
        <script type="text/javascript" src="JS/toottip.js"></script>
        <script type="text/javascript" src="JS/bootstrap.js"></script>
        <script type="text/javascript" src="JS/pswd/password-score.js"></script>
        <script type="text/javascript" src="JS/pswd/password-score-options.js"></script>
        <script type="text/javascript" src="JS/bootstrap-strength-meter.js"></script>
        <script type="text/javascript" src="JS/script.js"></script>
        
        <!--FAVICON AND TITTLE -->
        <link rel="icon" type="image/png" href="ressources/images/logo.png" />
        <title>SignUp</title>
    </HEAD>
 
<?php include 'navbar.php' ?>
<BODY>
    <div class="col-md-8 order-md-1">
    <form class="needs-validation" name="SignUp" action="PHP/signuprequest.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label><span> *</span>
            <input type="text" class="form-control" id="firstName" placeholder="Xxxxxxx" value="" required name="firstName">
            <div class="invalid-feedback">
              First name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label><span> *</span>
            <input type="text" class="form-control" id="lastName" placeholder="Xxxxxxxxx" value="" required name="lastName">
            <div class="invalid-feedback">
              Last name is required.
            </div>
          </div>
        </div>
        <div cmass="mb-3">
            <label for="date">Date of birth</label><span> *</span>
            <div class='input-group date' id='datetimepicker1'>
                <input type='date' class="form-control" name = "birthDate" id = "birthDate" value="<?php echo date('Y-m-d'); ?>"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <div class="mb-3">
          <label for="username">Username</label><span> *</span>
          <div class="input-group">
            <input type="text" class="form-control" id="username" placeholder="Username" required name="username">
            <div class="invalid-feedback" style="width: 100%;">
              Username is required, maybe this username is already used.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label><span> *</span>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" required name="email">
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        <div class="mb-3 form-group">
          <label for="pwd">Password</label><span> *</span>
          <div>
            <input type="password" class="form-control" id="password" placeholder="Password" required name="password" pattern=".{8,32}">
          </div>
          <div class="invalid-feedback">
            Please enter a password, between 8 and 32 chars, for more security use Captal, number and special chars.
          </div>
        </div>
        <div class="mb-3">
            <label for="phoneNum">Phone Number</label>
            <input type="text" class="form-control bfh-phone" data-country="countries_phone" style="">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn" id="submit" value="Sign Up" name="submit">
        </div>
    </form>
    </div>
</BODY>
 
