<?php
//removes unwanted text from name field
if(!isset($firstname)){
    $firstname="";
}
if(!isset($lastname)){
    $lastname="";
}
if(!isset($email)){
    $email="";
}
if(!isset($password)){
    $password="";
}
if(!isset($password2)){
    $password2="";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCULUS | FUTURE OF VR</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/all.css"
        integrity="sha384-eLT4eRYPHTmTsFGFAzjcCWX+wHfUInVWNm9YnwpiatljsZOwXtwV2Hh6sHM6zZD9" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar__container">
                <a href="index.php" id="navbar__logo"><i class="fa-solid fa-vr-cardboard"></i>OCULUS</a>
                <div class="navbar__toggle" id="mobile__menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="index.php" class="navbar__links">Home</a>
                    </li>
                    <li class="navbar__item">

                        <a href="#" class="navbar__links">About</a>
                    </li>
                    <li class="navbar__item">
                        <a href="contact.php" class="navbar__links">Contact</a>
                    </li>
                    <li class="navbar__btn margin">
                        <a href="#" class="button">Sign IN</a>
                    </li>
                    <!-- <li class="navbar__btn">
                        <a href="#" class="button">Sign UP</a>
                    </li>

                </ul> -->
            </div>
        </nav>
    </header>
    <section id="signup_container">
    <div id="container">
      <div class="form_wrap">
      <h1><span class="text_primary">Sign Up Now</span></h1>
        <p>It's the future of VR</p>
    <form action="loginvalidation.php" method="POST">
          <div class="form_group_2">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="Enter your first name..." value="<?php echo htmlspecialchars($firstname)?>"/>
            <?php if(isset($firstname_err)){ ?>
            <p><?php echo $firstname_err ?></p>
            <?php } ?>
          </div>
          <div class="form_group_2">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your last name..."value="<?php echo htmlspecialchars($lastname)?>"/>
            <?php if(isset($lastname_err)){ ?>
            <p><?php echo $lastname_err ?></p>
            <?php } ?>
          </div>
          <div class="form_group_2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter youe Email..." value="<?php echo htmlspecialchars($email)?> "/>
            <?php if(isset($email_err)){ ?>
            <p><?php echo $email_err ?></p>
            <?php } ?>
          </div>
          <div class="form_group_2">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password..." value="<?php echo htmlspecialchars($password)?>"/>
            <span class="eye">
            <i class="far fa-eye" aria-hidden="true" id="show" onclick="passtoggle()"></i>
            </span>
            <?php if(isset($password_err)){ ?>
            <p><?php echo $password_err ?></p>
            <?php } ?>
            
          </div>
          <div class="form_group_2">
            <label for="password2">Confirm Password</label>
            <input type="password" name="password2" id="password2" placeholder="Re Enter your password..."/>
            <span class="eye2">
            <i class="far fa-eye" aria-hidden="true" id="show2" onclick="passtoggle2()"></i>
            </span>
            <?php if(isset($password2_err)){ ?>
            <p><?php echo $password2_err ?></p>
            <?php } ?>
            
          </div>
          <button type="submit" class="btn">Sign Up</button>
          <p class="bottom-text">
            By clicking the Sign Up button, you agree to our
            <a href="#">Terms & Conditions</a> and
            <a href="#">Privacy Policy</a>
          </p>
        </form>
        </div>
        <div class="btnbottom"><p>Already have an account? <a href="#">Login Here</a></p></div>
        
        </div>
    </section>
    <button onclick="topFunction()" id="btn__top" title="Go to top"><i class="fa-solid fa-angles-up"></i></button>
    <footer class="fot">   
        <div class="social">
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        </div>
    </footer>

    <script src="js/app.js"></script>
</body>
</html>