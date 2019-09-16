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
<body onload="paral(),setIcons(23)">

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
            <?php  echo file_get_contents("../assets/branding.svg"); ?>
        </div>
        <div class="parallaxTitle" data-depth="0.8">
            </br>
            BRANDING
            <div class="parallaxSubTitle">
               PUT A GRID ON IT
            </div>
        </div>
    </div>

    <div class="container-fluid" >

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="description">
                   Since 2016 I began working on brand identities and logo design. Mainly working as a freelancer, most of my designs
                   are based on geometrical shapes allign to various grids.
                </br>
                    Below you can see some of my most relevant designs.
                </div>
            </div>
        </div>
    </div>
    <div class="container" >

        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link1" href="https://dribbble.com/Andumy" onmouseout="hideInfo(1)" class="hid">
                    <div id="info1" class="info">
                        Total Fitness logo
                    </div>
                </a>
                <img id="img1" class="imageSquare" onmouseover="showInfo(1)" src="../assets/branding/1.jpg" alt="1">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link2" href="https://dribbble.com/Andumy" onmouseout="hideInfo(2)" class="hid">
                    <div id="info2" class="info">
                        SunKiss logo
                    </div>
                </a>
                <img id="img2" class="imageSquare" onmouseover="showInfo(2)" src="../assets/branding/2.jpg" alt="2">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link3" href="https://dribbble.com/Andumy" onmouseout="hideInfo(3)" class="hid">
                    <div id="info3" class="info">
                        SMS Highway logo
                    </div>
                </a>
                <img id="img3" class="imageSquare" onmouseover="showInfo(3)" src="../assets/branding/3.jpg" alt="3">
            </div>
            <div class="col-12 col-md-12 col-lg-9">
            <a id="link4" href="https://dribbble.com/Andumy" onmouseout="hideInfo(4)" class="hid">
                    <div id="info4" class="info">
                        Diamond Seas Logo
                    </div>
                </a>
                <img id="img4" class="imageSquare" onmouseover="showInfo(4)" src="../assets/branding/4.jpg" alt="4">
            </div>
            <div class="col-12 col-lg-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <a id="link5" href="https://dribbble.com/Andumy" onmouseout="hideInfo(5)" class="hid">
                                <div id="info5" class="info">
                                    Learning History Logo
                                </div>
                            </a>
                            <img id="img5" class="imageSquare" onmouseover="showInfo(5)" src="../assets/branding/5.jpg" alt="5">
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <a id="link6" href="https://dribbble.com/Andumy" onmouseout="hideInfo(6)" class="hid">
                                <div id="info6" class="info">
                                   Rosewood Logo
                                </div>
                            </a>
                            <img id="img6" class="imageSquare" onmouseover="showInfo(6)" src="../assets/branding/6.jpg" alt="6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link7" href="https://dribbble.com/Andumy" onmouseout="hideInfo(7)" class="hid">
                    <div id="info7" class="info">
                        Gallant Logo
                    </div>
                </a>
                <img id="img7" class="imageSquare" onmouseover="showInfo(7)" src="../assets/branding/7.jpg" alt="7">
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <a id="link8" href="https://dribbble.com/Andumy" onmouseout="hideInfo(8)" class="hid">
                    <div id="info8" class="info">
                        Natura PCR logo
                    </div>
                </a>
                <img id="img8" class="imageSquare" onmouseover="showInfo(8)" src="../assets/branding/8.jpg" alt="8">
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <a id="link9" href="https://dribbble.com/Andumy" onmouseout="hideInfo(9)" class="hid">
                    <div id="info9" class="info">
                        Einstein Logo
                    </div>
                </a>
                <img id="img9" class="imageSquare" onmouseover="showInfo(9)" src="../assets/branding/9.jpg" alt="9">
            </div>
            
            <div class="col-12 col-md-4 col-lg-3">
            <a id="link10" href="https://dribbble.com/Andumy" onmouseout="hideInfo(10)" class="hid">
                    <div id="info10" class="info">
                        DDB Eco Services Logo
                    </div>
                </a>
                <img id="img10" class="imageSquare" onmouseover="showInfo(10)" src="../assets/branding/10.jpg" alt="10">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link11" href="https://dribbble.com/Andumy" onmouseout="hideInfo(11)" class="hid">
                    <div id="info11" class="info">
                     Dr. Briliant Logo
                    </div>
                </a>
                <img id="img11" class="imageSquare" onmouseover="showInfo(11)" src="../assets/branding/11.jpg" alt="11">
            </div>
            <div class="col-12 col-md-4 col-lg-3">
            <a id="link12" href="https://dribbble.com/Andumy" onmouseout="hideInfo(12)" class="hid">
                    <div id="info12" class="info">
                        Dare 2 Be Brave Logo
                    </div>
                </a>
                <img id="img12" class="imageSquare" onmouseover="showInfo(12)" src="../assets/branding/12.jpg" alt="12">
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <a id="link13" href="https://dribbble.com/Andumy" onmouseout="hideInfo(13)" class="hid">
                    <div id="info13" class="info">
                    Dare 2 Be Brave Logo
                    </div>
                </a>
                <img id="img13" class="imageSquare" onmouseover="showInfo(13)" src="../assets/branding/13.jpg" alt="13">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link14" href="https://dribbble.com/Andumy" onmouseout="hideInfo(14)" class="hid">
                    <div id="info14" class="info">
                    Article 2 Initiative Logo
                    </div>
                </a>
                <img id="img14" class="imageSquare" onmouseover="showInfo(14)" src="../assets/branding/14.jpg" alt="16">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link15" href="https://dribbble.com/Andumy" onmouseout="hideInfo(15)" class="hid">
                    <div id="info15" class="info">
                    Sigma TV Logo
                    </div>
                </a>
                <img id="img15" class="imageSquare" onmouseover="showInfo(15)" src="../assets/branding/15.jpg" alt="15">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link16" href="https://dribbble.com/Andumy" onmouseout="hideInfo(16)" class="hid">
                    <div id="info16" class="info">
                    LSAC Alumni Logo
                    </div>
                </a>
                <img id="img16" class="imageSquare" onmouseover="showInfo(16)" src="../assets/branding/16.jpg" alt="16">
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <a id="link17" href="https://dribbble.com/Andumy" onmouseout="hideInfo(17)" class="hid">
                    <div id="info17" class="info">
                    CA Concepts Logo
                    </div>
                </a>
                <img id="img17" class="imageSquare" onmouseover="showInfo(17)" src="../assets/branding/17.jpg" alt="17">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <a id="link18" href="https://dribbble.com/Andumy" onmouseout="hideInfo(18)" class="hid">
                    <div id="info18" class="info">
                    Perpetuum Logo
                    </div>
                </a>
                <img id="img18" class="imageSquare" onmouseover="showInfo(18)" src="../assets/branding/18.jpg" alt="18">
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <a id="link19" href="https://dribbble.com/Andumy" onmouseout="hideInfo(19)" class="hid">
                    <div id="info19" class="info">
                    Targul IT&C Logo
                    </div>
                </a>
                <img id="img19" class="imageSquare" onmouseover="showInfo(19)" src="../assets/branding/19.jpg" alt="19">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a id="link20" href="https://dribbble.com/Andumy" onmouseout="hideInfo(20)" class="hid">
                    <div id="info20" class="info">
                        SmartHack Logo
                    </div>
                </a>
                <img id="img20" class="imageSquare" onmouseover="showInfo(20)" src="../assets/branding/20.jpg" alt="20">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a id="link21" href="https://dribbble.com/Andumy" onmouseout="hideInfo(21)" class="hid">
                    <div id="info21" class="info">
                        SmartHack Logo
                    </div>
                </a>
                <img id="img21" class="imageSquare" onmouseover="showInfo(21)" src="../assets/branding/21.jpg" alt="21">
            </div>
            <div class="col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                <a id="link22" href="https://dribbble.com/Andumy" onmouseout="hideInfo(22)" class="hid">
                    <div id="info22" class="info">
                        Personal Logo
                    </div>
                </a>
                <img id="img22" class="imageSquare" onmouseover="showInfo(22)" src="../assets/branding/22.jpg" alt="22">
            </div>
        </div>

    </div>    
    <div class="filler hidden-md-up">
    </div>
</body>
</html>