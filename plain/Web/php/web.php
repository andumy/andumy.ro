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
    <script type="text/javascript" src="../js/details.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:100,300,400,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Andumy - Online Portofolio</title>
</head>
<body onload="paral(),setIcons(14)">

    <div class="up" id="up" onclick="smoothscroll()">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>
    <a href="../">
        <div class="back" id="back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </div>
    </a>
    <div id="scene" class="wrapper" >
        <div class="bgParallax" data-depth="0.2">
            <?php  echo file_get_contents("../assets/web.svg"); ?>
        </div>
        <div class="parallaxTitle" data-depth="0.8">
            WEB
                    </br>
                    DEVELOPMENT
            <div class="parallaxSubTitle">
               DESIGN,FRONT-END,BACK-END? GET THE FULL-STACK
            </div>
        </div>
    </div>

    <div class="container-fluid" >

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="description">
                   Between 2016 and 2017 I worked at Infinit Solutions as UX/UI Developer. I was in charge with designing various web pages 
                   or aplications and front-end developing, part of them. Starting with year 2017 I began working at Sigma TV as fullstack web
                   developer using PHP as my main back-end technology. 
                </br>
                    Below you can see some of my most relevant projects.
                </div>
            </div>
        </div>
    </div>
    <div class="container" >

        <div class="row">
            <div class="col-12 col-md-6">
                <a id="link1" href="https://clubdojo.ro/" onmouseout="hideInfo(1)" class="hid">
                    <div id="info1" class="info">
                        Dojo Bucuresti - Web site for karate club.
                        </br></br>
                        Full stack development
                    </div>
                </a>
                <img id="img1" class="imageSquare" onmouseover="showInfo(1)" src="../assets/web/1.jpg" alt="1">
            </div>
            <div class="col-12 col-md-6">
                <a id="link2" href="http://sigmatv.pub.ro/" onmouseout="hideInfo(2)" class="hid">
                    <div id="info2" class="info">
                        Sigma TV - Web site for digital television.
                        </br></br>
                        Full stack development
                    </div>
                </a>
                <img id="img2" class="imageSquare" onmouseover="showInfo(2)" src="../assets/web/2.jpg" alt="2">
            </div>
            <div class="col-12 col-md-6">
                <a id="link3" href="http://perpetuum.lsacbucuresti.ro/" onmouseout="hideInfo(3)" class="hid">
                    <div id="info3" class="info">
                        Perpetuum - University engineering contest web page.
                        </br></br>
                        Web design & Front-end development
                    </div>
                </a>
                <img id="img3" class="imageSquare" onmouseover="showInfo(3)" src="../assets/web/3.jpg" alt="3">
            </div>
            <div class="col-12 col-md-6">
                <a id="link4" href="https://dribbble.com/shots/3120246-Drop-The-Mic-Wireframe" onmouseout="hideInfo(4)" class="hid">
                    <div id="info4" class="info">
                       Drop The Mic - Global hub web platform, pitched at 2016 IAA Student competition.
                       </br></br>
                        Web design 
                    </div>
                </a>
                <img id="img4" class="imageSquare" onmouseover="showInfo(4)" src="../assets/web/4.jpg" alt="4">
            </div>
            
            <div class="col-12 col-md-6">
                <a id="link6" href="https://dribbble.com/shots/2954634-Rubik-s-cube-Landing-Page" onmouseout="hideInfo(6)" class="hid">
                    <div id="info6" class="info">
                       RMC - Online Library, part of 2016 Smarthack hackaton.
                       </br></br>
                        Web design 
                    </div>
                </a>
                <img id="img6" class="imageSquare" onmouseover="showInfo(6)" src="../assets/web/6.jpg" alt="6">
            </div>
            <div class="col-12 col-md-6">
                <a id="link5" href="https://dribbble.com/shots/2954634-Rubik-s-cube-Landing-Page" onmouseout="hideInfo(5)" class="hid">
                    <div id="info5" class="info">
                       Can You do It ? - Rubik's Cube Landing Page.
                       </br></br>
                        Web design 
                    </div>
                </a>
                <img id="img5" class="imageSquare" onmouseover="showInfo(5)" src="../assets/web/5.jpg" alt="5">
            </div>
            <div class="col-12 col-md-6">
                <a id="link7" href="http://www.cosmopolis.ro/apartamente-cosmopolis/" onmouseout="hideInfo(7)" class="hid">
                    <div id="info7" class="info">
                       Cosmopolis - Real estate landing page.
                       </br></br>
                       Web design & Front-end development
                    </div>
                </a>
                <img id="img7" class="imageSquare" onmouseover="showInfo(7)" src="../assets/web/7.jpg" alt="7">
            </div>
            <div class="col-12 col-md-6">
                <a id="link8" href="http://sportapp.andumy.ro/" onmouseout="hideInfo(8)" class="hid">
                    <div id="info8" class="info">
                       Sportapp - Web companion for karate clubs in order to manage athletes, referes and competitions.
                       Part of university semestrial homework on databases.
                       </br>
                       For demo acces with
                       </br>
                       user:Dojo
                       </br>
                       pass:test
                       </br></br>
                       Full stack development
                    </div>
                </a>
                <img id="img8" class="imageSquare" onmouseover="showInfo(8)" src="../assets/web/8.jpg" alt="8">
            </div>
            <div class="col-12 col-md-6">
                <a id="link9" href="#" onmouseout="hideInfo(9)" class="hid">
                    <div id="info9" class="info">
                       Learn IT - Web platform designed for kids learning. Part of 2016 innovation labs hackaton.
                        </br> 
                        Developed with Stan Mihai and Andru-Octavian Mocanu.
                       </br></br>
                       Web design & Angular 2 Front-end development
                    </div>
                </a>
                <img id="img9" class="imageSquare" onmouseover="showInfo(9)" src="../assets/web/9.jpg" alt="9">
            </div>
            <div class="col-12 col-md-6">
                <a id="link10" href="http://iesitoriidincamera.ro/" onmouseout="hideInfo(10)" class="hid">
                    <div id="info10" class="info">
                      Iesitorii Din Camera - Web page for Escape Room team.
                      </br></br>
                       Full stack development
                    </div>
                </a>
                <img id="img10" class="imageSquare" onmouseover="showInfo(10)" src="../assets/web/10.jpg" alt="10">
            </div>
            <div class="col-12 col-md-6">
                <a id="link11" href="http://andumy.ro/" onmouseout="hideInfo(11)" class="hid">
                    <div id="info11" class="info">
                      Andrei Dumitrescu - Personal portofolio web page.
                      </br></br>
                       Full stack development
                    </div>
                </a>
                <img id="img11" class="imageSquare" onmouseover="showInfo(11)" src="../assets/web/11.jpg" alt="11">
            </div>
            <div class="col-12 col-md-6">
                <a id="link12" href="savoy.php" onmouseout="hideInfo(12)" class="hid">
                    <div id="info12" class="info">
                      Savoy - Fine liqueurs landing page.
                      </br></br>
                      Web design
                    </div>
                </a>
                <img id="img12" class="imageSquare" onmouseover="showInfo(12)" src="../assets/web/12.jpg" alt="12">
            </div>
            <div class="col-12 col-md-6">
                <a id="link13" href="lsac.php" onmouseout="hideInfo(13)" class="hid">
                    <div id="info13" class="info">
                      Lsac Bucuresti - Landing page.
                      </br></br>
                      Web design
                    </div>
                </a>
                <img id="img13" class="imageSquare" onmouseover="showInfo(13)" src="../assets/web/13.jpg" alt="13">
            </div>
            
        </div>   
    </div>    
    <div class="filler hidden-md-up">
    </div>
</body>
</html>