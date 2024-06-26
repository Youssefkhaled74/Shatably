<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register | SHATTABLY</title>
     <!-- Title Icon -->
     <link rel="icon" type="image/png" href="/images/SHATTABLYwhite.png" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/Normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/shattably.css">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <!-- ===================== Navigation Bar ===================== -->
    <div class="nav">
        <h1>
            <a href="index.html" target="_self">SHATTABLY</a>
        </h1>
        <a href="index.html" class="logo">
            <img src="images/Black and White Minimal Monogram Logo.svg" alt="website-logo">
        </a>
        <ul>
            <li>
                <a href="sign-in.html">Sign in</a>
            </li>
            <li>
                <a href="sign-up.php">Register</a>
            </li>
        </ul>
    </div>
    <!-- ===================== END Navigation Bar ===================== -->

    <div class="welcome">
        <h2> Create a new account</h2>
    </div>

    <div class="reg-form">
        <img src="images/Black and White Minimal Monogram Logo.svg" alt="website-logo">
        <form action="CRegister.php" method="POST">
            <div class="full-name">
                <?php 
                    if(isset($firstname_error)){
                        echo $firstname_error;
                    }
                ?>
                <input type="text" class="f-name" name="firstname" placeholder="First name">
                <?php 
                    if(isset($lastname_error)){
                        echo $lastname_error;
                    }
                ?>
                <input type="text" class="l-name" name="lastname" placeholder="Last name">
            </div>
            <?php 
                    if(isset($email_error)){
                        echo $email_error;
                    }
            ?>
            <input type="email" class="email" name="email" placeholder="Email">
            <?php 
                    if(isset($password_error)){
                        echo $password_error;
                    }
            ?>
            <input type="password" class="pass" name="password" placeholder="Password">
            <?php 
                    if(isset($c_password_error)){
                        echo $c_password_error;
                    }
            ?>
            <input type="password" class="pass" name="c_password" placeholder="Confirm password">
            <?php 
                    if(isset($phone_error)){
                        echo $phone_error;
                    }
            ?>
            <input type="tel" class="phone" name="phone" placeholder="Phone number">
            <!-- <input type="submit" class="submit"> -->
            <button name="submit" class="submit">Submit</button>
            <div class="new-account">Already have an account? <a href="sign-in.html">Sign in</a></div>
        </form>
    </div>

    <!-- <img src="images/Black and White Minimal Monogram Logo.svg" class="logo" alt="website-logo"> -->
    <!-- <div class="reg">
        <img src="images/Black and White Minimal Monogram Logo.svg" alt="">
        <div class="regestration">
            <div class="tab">
                <div class="tab-inner">
                    <a href="sign-up.html">
                        <button class="tablinks active" onclick="openCity(event, 'sign-in')">Customer</button>
                    </a>
                </div>
                <div class="tab-inner">
                    <a href="sign-up.html">
                        <button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">User</button>
                    </a>
                </div>
            </div>
            <form action="index.php" method="POST" class="form tabcontent">
                <input type="text" id="usName" name="username" placeholder="Full Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirmPassword" placeholder="Confirm Password">
                <input type="submit" value="Sign up">
            </form>
            <div class="new-account">Already have an account? <a href="sign-in2.html">Sign in</a></div>

        </div>

    </div> -->

     <!-- ===================== Footer ===================== -->
     <footer>
        <div class="container">
            <img decoding="async" src="images/Black and White Minimal Monogram Logo.svg" alt="Logo" />
            <p>We are social</p>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <div class="policy">
                <a href="terms.html" class="ter">Terms and Conditions</a>
                <a href="privacy.html" class="pol">Privacy Policy</a>
            </div>
            <p class="copyright"> &copy; 2024 <a href="index.html">SHATTABLY</a> All Right Reserved. </p>
        </div>
    </footer>
    <!-- ===================== END Footer ===================== -->











    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/bab5d0d7f7.js" crossorigin="anonymous"></script>

</body>

</html>