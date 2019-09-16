<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="../manifest.json">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/details.css"></link>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="../js/details.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:100,300,400,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <title>Andumy - Online Portofolio</title>
</head>
<body onload="paral(),setIcons(2),initialDisplay()">

    <div class="up" id="up" onclick="smoothscroll()">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>
    <a href="../">
        <div class="back" id="back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </div>
    </a>
    <div id="aboutme">
    <div id="scene" class="wrapper">
        <div class="bgParallax portrait" data-depth="0.2">
            <?php  echo file_get_contents("../assets/face.svg"); ?>
        </div>
        <div class="parallaxTitle" data-depth="0.8">
            ANDREI
            </br>
            DUMITRESCU
            <div class="parallaxSubTitle">
              ABOUT ME
            </div>
        </div>         
    </div>
 </div>

    <div class="container-fluid" >

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="description">
                    Hello, so somehow you discovered me. Well met!
                    </br>
                    I'm Andrei, 22 years old and third year engineering student. I was passionate about logical puzzles and programming since I was a kid
                    and so, I have begun collecting all sort of rubik cubes and also I've started to learn basic borland Pascal. During high school I followed an intensive 
                    informatics program, eventually becoming a student at the Faculty of Automatic Control and Computers, University POLITEHNICA of Bucharest.
                    </br>
                    In the last 3-4 years I have begun to work on various web projects, and I have learned about the whole process of web development, from UX analysis to UI
                    design, front-end development, back-end development, database management and all the other stuff.
                    </br></br>
                    According to Pluralsight these are my results:
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/gd.jpg" alt="graphic design">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/cp.jpg" alt="c++">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/css.jpg" alt="css">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/html.jpg" alt="html">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/js.jpg" alt="javascript">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/ill.jpg" alt="illustrator">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/ps.jpg" alt="photoshop">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/mysql.jpg" alt="mysql">
                </div>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 col-md-4 offset-md-0 col-lg-4 offset-lg-4">
                <div class="scores" align="center">
                    <img class="imgShadow" src="../assets/details/maya.jpg" alt="maya">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" >
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="description">
                    So here we are in present after all these years and this incredible journey. What do you say? Let's get in touch.
                </div>
            </div>
        </div>
    </div>

    <div class="container" >

        <div class="row">

            <div class="col-6 col-md-3 col-lg-2">
               <div align="center">
                    <a href="../assets/cv.pdf">
                        <div class="contact">
                            <?php  echo file_get_contents("../assets/details/cv.svg"); ?>
                            </br>
                            CV
                        </div>
                    </a>
               </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
               <div align="center">
                    <a href="https://steamcommunity.com/id/andumy">
                        <div class="contact">
                            <?php  echo file_get_contents("../assets/details/steam.svg"); ?>
                            </br>
                        Steam
                        </div>
                    </a>
               </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
               <div align="center">
                    <a href="https://dribbble.com/Andumy">
                        <div class="contact">
                            <?php  echo file_get_contents("../assets/details/dribbble.svg"); ?>
                            </br>
                            Dribbble
                        </div>
                    </a>
               </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
               <div align="center"> 
                    <a href="https://www.artstation.com/andumy">
                        <div class="contact">
                            <?php  echo file_get_contents("../assets/details/artstation.svg"); ?>
                            </br>
                            Artstation
                        </div>
                    </a>
               </div>
            </div>
            <div class="col-6 col-md-3 offset-md-3 col-lg-2 offset-lg-0">
               <div align="center">
                    <a href="https://99designs.com/profiles/andumy">
                        <div class="contact">
                            <?php  echo file_get_contents("../assets/details/99.svg"); ?>
                            </br>
                            99Design
                        </div>
                    </a>
               </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
               <div align="center">
                    <a href="https://www.facebook.com/Andumy">
                        <div class="contact">
                            <?php  echo file_get_contents("../assets/details/facebook.svg"); ?>
                            </br>
                            Facebook
                        </div>
                    </a>
               </div>
            </div>
        </div>
    </div>    
    <div class="filler hidden-md-up">
    </div>
</body>
</html>