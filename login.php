<?php
//M4n6l3d
// Photo by <a href="https://unsplash.com/@ninjason?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Jason Leung</a> on <a href="https://unsplash.com/photos/Xaanw0s0pMk?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
//
   include_once 'nocache.php';
   ob_start();
   session_start();
?>

<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Please login to continue</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel = "shortcut icon" href = "favicon.ico">
        <link rel = "stylesheet" href = "css/login.css">
    </head>
    <body>
        <div class="container" >
            <form class="form" id="login">
                <h1 class = "form__title">Please Login</h1>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input id="loginEmail" type="text" class="form__input" autofocus placeholder="Email">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input id="loginPassword" type="password" class="form__input" placeholder="Password">
                    <div class="form__input-error-message"></div>
                </div>
                <button id="loginSubmit" class="form__button" type="submit">continue</button>
                <p class="form__text">
                    <a href="#" id="linkForgot" class="form__link">Forgoten your password?</a>
                </p>
                <p class="form__text">
                    <a href="#" id="linkCreateAccount" class="form__link" >Create an account?</a>
                </p>
            </form>
            <form class="form form--hidden" id="createAccount">
                <h1 class = "form__title">Create account</h1>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input id="signupUser" type="text" class="form__input" autofocus placeholder="Username">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input id="signupEmail" type="text" class="form__input" autofocus placeholder="Email address">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input id="signupPassword" type="password" class="form__input" placeholder="Password">
                    <span id="strengthDisp" class="displayBadge">Weak</span>
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input id="signupConfirm"  type="password" class="form__input" placeholder="Confirm password">
                    <div class="form__input-error-message"></div>
                </div>
                <button id="signupSubmit" class="form__button" type="submit">continue</button>
                <p class="form__text">
                    <a href="#" class="form__link" id="linkLogin">Have an account? Sign in</a>
                </p>
            </form>
        </div>
        <script content="text/javascript" src="js/login.js"></script>
    </body>