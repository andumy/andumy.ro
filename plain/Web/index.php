<html>
<head>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css"></link>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:100,300,400,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Andumy - Online Portofolio
    </title>
</head>
<body onload="initialDisplay(),initParallax()">
    <nav class="navbar navbar-light navbar-transparent fixed-bottom">
            <div class="navbar-nav">
                
                <a class="nav-item nav-link" id="link0" onclick="activate(0)">Graphic Design</a>
                <a class="nav-item nav-link" id="link1" onclick="activate(1)">Branding</a>
                <a class="nav-item nav-link" id="link2" onclick="activate(2)">
                    <div class="logoAboutMe" id="logo">
                        <?php echo file_get_contents("assets/logo.svg"); ?>
                    </div> 
                </a>
                <a class="nav-item nav-link" id="link3" onclick="activate(3)">Web development</a>
                <a class="nav-item nav-link" id="link4" onclick="activate(4)">OOP</a>
            </div>
    </nav>
    <div class="wrapper">  
    
        <div id="graphics">
            <div id="sceneGraphics" class="sectionWrapper">
                <div class="bgParallaxImage" data-depth="0.2">
                    <img src="assets/sniper.png" class="bgParallaxImage" alt="sniper">
                </div>
                <div class="parallaxTitle" data-depth="0.8">
                     </br>
                    GRAPHIC
                    </br>
                    DESIGN
                    <div class="parallaxSubTitle">
                        <a href="/php/graphics.php">
                            <div class="CTA" onmouseover="showArrow(1)" onmouseout="hideArrow(1)">
                                <div id="CTA1">
                                SEE MORE
                                </div>
                                <div id="arrow1" style="display:none;">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
        <div id="branding">
            <div id="sceneBranding" class="sectionWrapper">
                <div class="bgParallax" data-depth="0.2">
                    <?php  echo file_get_contents("assets/branding.svg"); ?>
                </div>
                <div class="parallaxTitle" data-depth="0.8">
                    </br>
                    BRANDING
                    <div class="parallaxSubTitle">
                        <a href="/php/branding.php">
                            <div class="CTA" onmouseover="showArrow(2)" onmouseout="hideArrow(2)">
                                <div id="CTA2">
                                SEE MORE
                                </div>
                                <div id="arrow2" style="display:none;">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="aboutme">
           <div id="sceneAbout" class="sectionWrapper">
                 <div class="portrait bgParallax" data-depth="0.2">
                    <?php  echo file_get_contents("assets/face.svg"); ?>
                </div>
                <div class="parallaxTitle" data-depth="0.8">
                ANDREI
                </br>
                DUMITRESCU
                    <div class="parallaxSubTitle">
                        <a href="php/details.php">
                            <div class="CTA" onmouseover="showArrow(3)" onmouseout="hideArrow(3)">
                                <div id="CTA3">
                                FULL STACK WEB DEVELOPER</br>
                                SOFTWARE ENGINEER</br>
                                3D ARTIST & ANIMATOR
                                </div>
                                <div id="arrow3" style="display:none;">
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
           </div>
        </div>

        <div id="webdevelopment">
            <div id="sceneWeb" class="sectionWrapper">
                <div class="bgParallax" data-depth="0.2">
                    <?php  echo file_get_contents("assets/web.svg"); ?>
                </div>
                <div class="parallaxTitle" data-depth="0.8">
                    WEB
                    </br>
                    DEVELOPMENT
                    <div class="parallaxSubTitle">
                        <a href="php/web.php">
                            <div class="CTA" onmouseover="showArrow(4)" onmouseout="hideArrow(4)">
                                <div id="CTA4">
                                SEE MORE
                                </div>
                                <div id="arrow4" style="display:none;">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="oop">
            <div id="sceneOOP" class="sectionWrapper">
                <div class="bgParallax" data-depth="0.2">
                    <?php  echo file_get_contents("assets/code.svg"); ?>
                </div>
                <div class="parallaxTitle" data-depth="0.8">
                    OBJECT
                    </br>
                    ORIENTED
                    </br>
                    PROGRAMMING
                    <div class="parallaxSubTitle">
                        <a href="/php/oop.php">
                            <div class="CTA" onmouseover="showArrow(5)" onmouseout="hideArrow(5)">
                                <div id="CTA5">
                                SEE MORE
                                </div>
                                <div id="arrow5" style="display:none;">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

</body>
</html>