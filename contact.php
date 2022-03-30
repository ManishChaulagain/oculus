<?php
//removes unwanted text from name field
if(!isset($name)){
    $name="";
}
if(!isset($email)){
    $email="";
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
                    <li class="navbar__btn">
                        <a href="signup.php" class="button">Sign UP</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <section id="contact__form">
        <div class="contact__container">
            <h1><span class="text__primary">Contact Us</span></h1>
            <p>Please fill out the form below to contact us</p>
            <form action="contact_form.php" method="POST">
                <div class="form__group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name..." value="<?php echo htmlspecialchars($name)?>" >
                    <!--htmlspecialchars doesnt remove fieldtext -->
                    <?php if(isset($name_err)){ ?>
                    <p><?php echo $name_err ?></p>
                    <?php } ?>
                </div>
                <div class="form__group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter youe Email..." value="<?php echo htmlspecialchars($email)?>">
                    <?php if(isset($email_err)){ ?>
                    <p><?php echo $email_err ?></p>
                    <?php } ?>
                </div>
                <div class="form__group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Enter Your message...(less than 50 character)"></textarea>
                    <?php if(isset($message_err)){ ?>
                    <p><?php echo $message_err ?></p>
                    <?php } ?>
                </div>
                <button type="submit" name="btnsubmit" class="btn">Submit</button>
                </button>
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