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
    <section class="showcase">
        <div class="content">
            <h1>OCULUS QUEST IS READY</h1>
            <p>SQUAD UP WITH FRIENDS IN DIFFERENT TIME ZONES. MEET UP WITH REAL PEOPLE AT VIRTUAL EVENTS. CREATE, PLAY
                AND EXPLORE, TOGETHER FROM WHEREVER, ON OCULUS QUEST.</p>
            <a href="#" class="btn"><i class="fas fa-chevron-right"></i> Read More</a>
        </div>
        </header>
    </section>
    <section>
        <div class="vid">
            <video width="75%" height="100%" autoplay muted>
                <source src="./img/preview.mov" type="video/mp4">
            </video>
        </div>
    </section>
    <section>
    <div class="info__body">
            <div class="info__video">
                <video class="vod" width="100%" height="100%" muted loop>
                    <source src="./img/preview2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="info__content">
                <h2><span class="text__primary">VR</span> IS EVEN BETTER TOGETHER</h2>
                <p>
                    There’s never been more ways to get together with friends or meet new ones in VR. With over 250
                    games and apps, it’s easy to find experiences you’ll love to share on Quest 2. All from $299 USD.**
                </p>
                <a href="#" class="btn">EXPLORE SOCIAL EXPERIENCES</a>
            </div>
    </div>
    </section >
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