
<?php
    require_once('login.php');
    $milktea ->login();
    $milktea ->register();
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
     <!-- <script src="./validation.js"></script> -->
    <title>Login</title>
</head>

<body>
    <div class="div">
        <div class="Overlay" id="overlay">
            <div class="sign-in" id="sign-in" style="color:black">
                <h1>𝐖𝐞𝐥𝐜𝐨𝐦𝐞 to 🅣🅔🅐❜🅚🅣🅐🅛🅚🅔🅡 </h1>
                <h4>where you can have the milk tea you deserve!</h4>
                <h4>Already have an account?</h4>
                <button class="switch-button" id="slide-right-button" style="color:black">Log In</button>
            </div>
            <div class="sign-up" id="sign-up">
                <h1>𝐖𝐞𝐥𝐜𝐨𝐦𝐞 to 🅣🅔🅐❜🅚🅣🅐🅛🅚🅔🅡 </h1>
                <h4>You can't buy happiness, but you can buy milk tea and that's kind of the same thing.</h4>
                <h4>Don't have an account? </h4>
                <button class="switch-button" id="slide-left-button">Register</button>
            </div>
        </div>
        <!-- LogIn Form -->
        <div class="form">
            <div class="sign-in" id="sign-in-info">
                <h1>Sign In</h1>

                <p class="small">or use your email account:</p>
                <form id="sign-in-form" method="POST">
                    <input type="email" class="email" name="email" placeholder="Email" required />
                    <input type="password" class="password" name="password" placeholder="Password" required />
                    <button type="submit" class="control-button " name="login" id="logIn">Log In</button>
                </form>
            </div>
        <!-- Registration form -->
            <div class="sign-up" id="sign-up-info">
                <h1>Register Account</h1>

                <p class="small">or use your email for registration:</p>
                <form id="sign-up-form" method="POST">
                    <small id="nameCheck" name="errorplace"></small><br>
                    <input type="text" class="name" name="name" id="name" placeholder="Name" required/><br>
                    <small id="emailCheck"></small><br>
                    <input type="email" class="email" name="emailNew" id= "email" placeholder="Email" required/><br>
                    <small id="passCheck"></small><br>
                    <input type="password" class="password" name="psw" id= "password" placeholder="Password" required/><br>
                    <small id="passMatch"></small><br>
                    <input type="password" class="confirmPass" name="confirmPass" id="confirmPass" placeholder="Confirm password" required/>
                    <button type="submit" class="control-button " name="register" id="register">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        var overlay = document.getElementById("overlay");

        // Buttons to 'switch' the page
        var openSignUpButton = document.getElementById("slide-left-button");
        var openSignInButton = document.getElementById("slide-right-button");

        // The sidebars
        var leftText = document.getElementById("sign-in");
        var rightText = document.getElementById("sign-up");

        // The forms
        var accountForm = document.getElementById("sign-in-info")
        var signinForm = document.getElementById("sign-up-info");

        // Open the Sign Up page
        openSignUp = () => {
            // Remove classes so that animations can restart on the next 'switch'
            leftText.classList.remove("overlay-text-left-animation-out");
            overlay.classList.remove("open-sign-in");
            rightText.classList.remove("overlay-text-right-animation");
            // Add classes for animations
            accountForm.className += " form-left-slide-out"
            rightText.className += " overlay-text-right-animation-out";
            overlay.className += " open-sign-up";
            leftText.className += " overlay-text-left-animation";
            // hide the sign up form once it is out of view
            setTimeout(function () {
                accountForm.classList.remove("form-left-slide-in");
                accountForm.style.display = "none";
                accountForm.classList.remove("form-left-slide-out");
            }, 700);
            // display the sign in form once the overlay begins moving right
            setTimeout(function () {
                signinForm.style.display = "flex";
                signinForm.classList += " form-right-slide-in";
            }, 200);
        }

        // Open the Sign In page
        openSignIn = () => {
            // Remove classes so that animations can restart on the next 'switch'
            leftText.classList.remove("overlay-text-left-animation");
            overlay.classList.remove("open-sign-up");
            rightText.classList.remove("overlay-text-right-animation-out");
            // Add classes for animations
            signinForm.classList += " form-right-slide-out";
            leftText.className += " overlay-text-left-animation-out";
            overlay.className += " open-sign-in";
            rightText.className += " overlay-text-right-animation";
            // hide the sign in form once it is out of view
            setTimeout(function () {
                signinForm.classList.remove("form-right-slide-in")
                signinForm.style.display = "none";
                signinForm.classList.remove("form-right-slide-out")
            }, 700);
            // display the sign up form once the overlay begins moving left
            setTimeout(function () {
                accountForm.style.display = "flex";
                accountForm.classList += " form-left-slide-in";
            }, 200);
        }

        // When a 'switch' button is pressed, switch page
        openSignUpButton.addEventListener("click", openSignUp, false);
        openSignInButton.addEventListener("click", openSignIn, false);
        $(document).ready(function () {
            $('#logIn').on('click', function () {

            })
        })


        // Validate the data inputted in the form
        $('#register').on('click', function () {
            var name = $('#name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var confirmPass = $('#confirmpass').val();
            var re = /^\w+$/;
            var mailFormat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var num = /[0-9]/;
            var capital = /[A-Z]/;
            var lowercase = /[a-z]/;
            var characters = /[$&+,:;=?@#|'<>.-^*()%!]/;
            if (re.test(name) = true) {
                $('#nameCheck').text("Invalid name").css({ 'color': 'red' });
            }
            if (mailFormat.test(email) = true) {
                $('#emailCheck').text("Invalid email").css({ 'color': 'red' });
            }
            if (password.length < 8) {
                $('#passCheck').text("Password is too short").css({ 'color': 'red' });;
            } else if (password.length > 15) {
                $('passCheck').text("Password is too long").css({ 'color': 'red' });
            } else if (num.re(password) == true || capital.re(password) == true || lowercase.re(password)== true || characters.re(test) == true) {
                $('#passCheck').text("Invalid password").css({ 'color': 'red' })
            }
            if (confirmPass != password) {
                $('#passMatch').text().css({ 'color': 'red' })
            }
        })

    </script>


</body>

</html>