<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/bootstrap.css?v=<?php echo time(); ?>">
    <title>Galaxy Login</title>
</head>

<body>
    <h1 class="mt-5 _wh1 animate-typing" data-type-speed="100">
        Welcome back! Let's login!
    </h1>

    <div class="_lr1 _lrb1" id="lb1" style="display: none;">
        <span class="animate-typing" data-type-delay="4500" data-type-speed="100">Enter your credentials to get logged in!</span>
        <div class="mt-3" id="emq1" style="display: none;">
            <div class="mt-3">
                <input type="text" class="form-control" id="uEmail" placeholder="Enter your email!">
            </div>
            <div class="mt-3 float-end">
                <button class="btn btn-outline-light" id="contem1">Continue</button>
            </div>
            <div class="mt-3">
                <p class="_link"><a href="index.php">Don't have an account?</a></p>
            </div>
        </div>
        <div class="mt-3" id="naq1" style="display: none;">
            <div class="mt-3">
                <input type="text" class="form-control" id="uName" placeholder="Enter your password!">
            </div>
            <div class="mt-3 float-end">
                <button class="btn btn-outline-light" id="logMeIn">Log me in!</button>
            </div>
            <div class="mt-3">
                <p class="_link"><a href="index.php">Don't have an account?</a></p>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="plugins/animate-typing/jquery.animateTyping.js"></script>
<script src="assets/bootstrap.bundle.js"></script>
<script src="config/config.js"></script>

</html>