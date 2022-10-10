<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/bootstrap.css?v=<?php echo time(); ?>">
    <title>Galaxy Register</title>
</head>

<body>
    <h1 class="mt-5 _wh1 animate-typing" data-type-speed="100" id="lgyr">
        Welcome to Galaxy Login & Register!
    </h1>

    <div class="_lr1 _lrb1" id="rb1" style="display: none;">
        <span class="animate-typing" data-type-delay="4500" data-type-speed="100">Let's get you registered!</span>
        <div class="mt-3" id="remq1" style="display: none;">
            <div class="mt-3">
                <input type="text" class="form-control" id="uEmail" placeholder="Enter your email!">
            </div>
            <div class="mt-3 float-end">
                <button class="btn btn-outline-light" id="contem1">Continue</button>
            </div>
            <div class="mt-3">
                <p class="_link"><a href="login.php">Already have an account?</a></p>
            </div>
        </div>
        <div class="mt-3" id="naq1" style="display: none;">
            <div class="mt-3">
                <input type="text" class="form-control" id="uName" placeholder="Enter your name!">
            </div>
            <div class="mt-3 float-end">
                <button class="btn btn-outline-light" id="contem2">Continue</button>
            </div>
            <div class="mt-3">
                <p class="_link"><a href="login.php">Already have an account?</a></p>
            </div>
        </div>
        <div class="mt-3" id="paq1" style="display: none;">
            <div class="mt-3">
                <input type="text" class="form-control" placeholder="Enter your password!">
            </div>
            <div class="mt-3 float-end">
                <button class="btn btn-outline-light" id="contem3">Continue</button>
            </div>
            <div class="mt-3">
                <p class="_link"><a href="login.php">Already have an account?</a></p>
            </div>
        </div>
        <div class="mt-3" id="refe1" style="display: none;">
            <div class="mt-3">
                <input type="text" class="form-control" id="referral" placeholder="Were you referred to Galaxy Login & Register? If so, who referred you!">
            </div>
            <div class="mt-3 float-end">
                <button class="btn btn-outline-light" id="contem4">Continue</button>
            </div>
            <div class="mt-3">
                <p class="_link"><a href="login.php">Already have an account?</a></p>
            </div>
        </div>
        <div class="mt-3" id="veri1" style="display: none;">
            <span id="finalStep"></span>
            <div class="mt-3">
                <p>Your email is: <span id="email" class="_frmval"></span></p>
                <p>Your name is: <span id="name" class="_frmval"></span></p>
                <p>Your were referred by: <span id="referredby" class="_frmval"></span></p>
            </div>
            <div class="mt-3">
                <button class="btn btn-outline-light float-end" id="contem3">Complete Registration</button>
            </div>
            <div class="mt-3">
                <p class="_link"><a href="login.php">Already have an account?</a></p>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="plugins/animate-typing/jquery.animateTyping.js"></script>
<script src="assets/bootstrap.bundle.js"></script>
<script src="config/config.js"></script>

</html>