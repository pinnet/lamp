<?php
//M4n6l3d
ob_start();
session_start();
include_once 'nocache.php';
?>

<?
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>



    <title>Please enter new details</title>
    <link href = "css/style.css" rel = "stylesheet">
    <script type="text/javascript" src="js/login.js"></script>
</head>

<body>
<div class = "container form-signin">
    <?php
    $msg = '';
    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        if ($_POST['username'] == 'admin' &&
            $_POST['password'] == 'S3cur317!') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $_POST['username'];
            echo 'You have entered valid use name and password';
        }else {
            $msg = 'Wrong username or password';
        }
    }
    ?>
</div>
<div class = "container">
    <form class = "form-signin" role = "form"
          action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
          ?>" method = "post">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <input type = "text" class = "form-control"
               name = "username" placeholder = "username"
               required autofocus>
        <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
        <input type = "password" class = "form-control"
               name = "pswd_verify" placeholder = "retype password" required>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "login">Submit</button>
    </form>
</div>

</body>
</html>