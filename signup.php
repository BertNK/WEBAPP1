<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>MovieWave</title>
</head>

<body>
    <div class="signupcontainer">
        <div class="signupblok">
            <form class='signup_form' name="register" method="POST" action="result.php">
                <a class='register_tekst'>Sign Up</a>
                <div class="signin_row">
                    <p class="rowtekst">First Name
                    <p>
                        <input type='tekst' name='firstname' class="rowinput">
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Last Name
                    <p>
                        <input type='tekst' name='lastname' class="rowinput">
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Email
                    <p>
                        <input type='tekst' name='email' class="rowinput">
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Password
                    <p>
                        <input type='password' name='password' class="rowinput">
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Age
                    <p>
                        <input type='tekst' name='age' class="rowinput">
                </div>
                <div class="signin_row">
                    <p class="rowtekst">Terms and conditions
                    <p>
                        <input type='checkbox' name='' class="rowcheckbox">
                </div>
                <div class="signin_row">
                    <input type='submit' name='submit' value='Send' class="rowsubmit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>