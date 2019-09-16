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
<body onload="paral(),setIcons(24)">

    <div class="up" id="up" onclick="smoothscroll()">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>
    <a href="../">
        <div class="back" id="back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </div>
    </a>
    <div id="scene" class="wrapper" >
        <div class="bgParallaxImage" data-depth="0.2">
            <img src="../assets/sniper.png" class="bgParallaxImage" alt="sniper">
        </div>
        <div class="parallaxTitle" data-depth="0.8">
            </br>
            GRAPHIC
            </br>
            DESIGN
            <div class="parallaxSubTitle">
               FROM SKETCH TO MOTION
            </div>
        </div>
    </div>

    <div class="container-fluid" >

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="description">
                    Since 2011 I've been working as a 3D artist in various projects. The biggest involvement i had
                    was through Valve's Dota 2 Workshop. With 2 models accepted in game and arround 60 submissions
                    i was responsable with base meshing, digital sculpting, rigging, animation and particle effects design.
                    </br>
                    Beside that I was part in game development projects organised from companies like Ubisoft and Microsoft.
                    </br>
                    Also since 2016 I was LSAC's head of design department. I was in charge with creating visual appealing banners and posters
                    for various events.
                </div>
            </div>
        </div>
    </div>
    <div class="container" >

        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link1" href="https://steamcommunity.com/sharedfiles/filedetails/?id=489957898" onmouseout="hideInfo(1)" class="hid">
                    <div id="info1" class="info">
                        Ogre Magi´s Magma Scepter - A collaboration with Nicolai "MadShock" Von Stromberg, which is until today the most rated item design
                        for Ogre Magi character.
                    </div>
                </a>
                <img id="img1" class="imageSquare" onmouseover="showInfo(1)" src="../assets/graphics/1.jpg" alt="1">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link2" href="https://steamcommunity.com/sharedfiles/filedetails/?id=429681116" onmouseout="hideInfo(2)" class="hid">
                    <div id="info2" class="info">
                        Polycount Courier - A collaboration with "down_limit" for the polycount treasure contest.
                    </div>
                </a>
                <img id="img2" class="imageSquare" onmouseover="showInfo(2)" src="../assets/graphics/2.jpg" alt="2">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link3" href="https://steamcommunity.com/sharedfiles/filedetails/?id=450017735" onmouseout="hideInfo(3)" class="hid">
                    <div id="info3" class="info">
                        Eye of Thunder - Ward entry in collaboration with MonsterInk Studio.
                    </div>
                </a>
                <img id="img3" class="imageSquare" onmouseover="showInfo(3)" src="../assets/graphics/3.jpg" alt="3">
            </div>
            <div class="col-12 col-md-12 col-lg-9">
            <a id="link4" href="https://steamcommunity.com/sharedfiles/filedetails/?id=318619294" onmouseout="hideInfo(4)" class="hid">
                    <div id="info4" class="info">
                        Smoke of War - A collaboration with Pior Oberson and Prokhor "sumers" Piskarev. For this set
                        custom particles, icons and abilities were made.
                    </div>
                </a>
                <img id="img4" class="imageSquare" onmouseover="showInfo(4)" src="../assets/graphics/4.gif" alt="4">
            </div>
            <div class="col-12 col-lg-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <a id="link5" href="https://steamcommunity.com/sharedfiles/filedetails/?id=258023948" onmouseout="hideInfo(5)" class="hid">
                                <div id="info5" class="info">
                                    Neokin Faierie Ward - A collaboration with Nicolai "MadShock" Von Stromberg, one of the two accepted submissions curently in game.
                                </div>
                            </a>
                            <img id="img5" class="imageSquare" onmouseover="showInfo(5)" src="../assets/graphics/5.gif" alt="5">
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <a id="link6" href="https://steamcommunity.com/sharedfiles/filedetails/?id=322870083" onmouseout="hideInfo(6)" class="hid">
                                <div id="info6" class="info">
                                   CoastBreaker - A collaboration with "Ghost".
                                </div>
                            </a>
                            <img id="img6" class="imageSquare" onmouseover="showInfo(6)" src="../assets/graphics/6.jpg" alt="6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link7" href="https://www.artstation.com/artwork/0lPLw" onmouseout="hideInfo(7)" class="hid">
                    <div id="info7" class="info">
                        Rubick set - A collaboration with "Strimax".
                    </div>
                </a>
                <img id="img7" class="imageSquare" onmouseover="showInfo(7)" src="../assets/graphics/7.jpg" alt="7">
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <a id="link8" href="https://steamcommunity.com/sharedfiles/filedetails/?id=211219624" onmouseout="hideInfo(8)" class="hid">
                    <div id="info8" class="info">
                        Tool of the Damned - A collaboration with "mihalceanu".
                    </div>
                </a>
                <img id="img8" class="imageSquare" onmouseover="showInfo(8)" src="../assets/graphics/8.jpg" alt="8">
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <a id="link9" href="https://steamcommunity.com/sharedfiles/filedetails/?id=218602180" onmouseout="hideInfo(9)" class="hid">
                    <div id="info9" class="info">
                        Clockwerk Watcher Ward - A collaboration with Nicolai "MadShock" Von Stromberg, one of the two accepted submissions curently in game.
                    </div>
                </a>
                <img id="img9" class="imageSquare" onmouseover="showInfo(9)" src="../assets/graphics/9.jpg" alt="9">
            </div>
            
            <div class="col-12 col-md-4 col-lg-3">
            <a id="link10" href="https://steamcommunity.com/sharedfiles/filedetails/?id=505641556" onmouseout="hideInfo(10)" class="hid">
                    <div id="info10" class="info">
                        The Dezun's Reesha - A collaboration with "Rock It", "Stmr" and "Swaggernaut".
                    </div>
                </a>
                <img id="img10" class="imageSquare" onmouseover="showInfo(10)" src="../assets/graphics/10.jpg" alt="10">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link11" href="https://www.artstation.com/artwork/yJOZK" onmouseout="hideInfo(11)" class="hid">
                    <div id="info11" class="info">
                       Various digital sculpts used as weapons.
                    </div>
                </a>
                <img id="img11" class="imageSquare" onmouseover="showInfo(11)" src="../assets/graphics/11.jpg" alt="11">
            </div>
            <div class="col-12 col-md-4 col-lg-3">
            <a id="link12" href="http://steamcommunity.com/sharedfiles/filedetails/?id=329110174" onmouseout="hideInfo(12)" class="hid">
                    <div id="info12" class="info">
                        Ancestral Set of the Wise Magus - A collaboration with "Ghost".
                    </div>
                </a>
                <img id="img12" class="imageSquare" onmouseover="showInfo(12)" src="../assets/graphics/12.jpg" alt="12">
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <a id="link13" href="https://www.artstation.com/artwork/VyOQg" onmouseout="hideInfo(13)" class="hid">
                    <div id="info13" class="info">
                       Neokin Faerie Ward - Base mesh retopology and digital sculpt.
                    </div>
                </a>
                <img id="img13" class="imageSquare" onmouseover="showInfo(13)" src="../assets/graphics/13.jpg" alt="13">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link14" href="https://www.artstation.com/artwork/JeNQv" onmouseout="hideInfo(14)" class="hid">
                    <div id="info14" class="info">
                        Clockwerk Watcher Ward - Base mesh retopology and digital sculpt.
                    </div>
                </a>
                <img id="img14" class="imageSquare" onmouseover="showInfo(14)" src="../assets/graphics/14.jpg" alt="16">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link15" href="https://www.artstation.com/artwork/AZ4Qe" onmouseout="hideInfo(15)" class="hid">
                    <div id="info15" class="info">
                        Coiffes of the Firebrand - A collaboration betweem 6 different artists including a full set of 
                        head and shoulder pieces with particle effects.
                    </div>
                </a>
                <img id="img15" class="imageSquare" onmouseover="showInfo(15)" src="../assets/graphics/15.jpg" alt="15">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link16" href="https://www.artstation.com/artwork/AZ4Qe" onmouseout="hideInfo(16)" class="hid">
                    <div id="info16" class="info">
                    Coiffes of the Firebrand - A collaboration betweem 6 different artists including a full set of 
                        head and shoulder pieces with particle effects.
                    </div>
                </a>
                <img id="img16" class="imageSquare" onmouseover="showInfo(16)" src="../assets/graphics/16.jpg" alt="16">
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <a id="link17" href="http://steamcommunity.com/sharedfiles/filedetails/?id=489961847" onmouseout="hideInfo(17)" class="hid">
                    <div id="info17" class="info">
                        Ogre Magi´s Magma Scepter - A collaboration with Nicolai "MadShock" Von Stromberg, which is until today the most rated item design
                        for Ogre Magi character.
                    </div>
                </a>
                <img id="img17" class="imageSquare" onmouseover="showInfo(17)" src="../assets/graphics/17.jpg" alt="17">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <a id="link18" href="https://www.artstation.com/artwork/AZ4Qe" onmouseout="hideInfo(18)" class="hid">
                    <div id="info18" class="info">
                    Coiffes of the Firebrand - A collaboration betweem 6 different artists including a full set of 
                        head and shoulder pieces with particle effects.
                    </div>
                </a>
                <img id="img18" class="imageSquare" onmouseover="showInfo(18)" src="../assets/graphics/18.jpg" alt="18">
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <a id="link19" href="http://steamcommunity.com/sharedfiles/filedetails/?id=351763000" onmouseout="hideInfo(19)" class="hid">
                    <div id="info19" class="info">
                    Tattered Vestments of the Sky Scorcher - A collaboration with "Stuburrito".
                    </div>
                </a>
                <img id="img19" class="imageSquare" onmouseover="showInfo(19)" src="../assets/graphics/19.jpg" alt="19">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <a id="link20" href="#" onmouseout="hideInfo(20)" class="hid">
                    <div id="info20" class="info">
                    Perpetuum Poster - Poster for University engineering competition.
                    </div>
                </a>
                <img id="img20" class="imageSquare" onmouseover="showInfo(20)" src="../assets/graphics/20.jpg" alt="20">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <a id="link21" href="https://dribbble.com/shots/3811150-Perpetuum-Poster" onmouseout="hideInfo(21)" class="hid">
                    <div id="info21" class="info">
                    A christmas story poster - Poster for a Christmas party.
                    </div>
                </a>
                <img id="img21" class="imageSquare" onmouseover="showInfo(21)" src="../assets/graphics/21.jpg" alt="21">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <a id="link22" href="#" onmouseout="hideInfo(22)" class="hid">
                    <div id="info22" class="info">
                    Freshmen prom party poster - Poster for the anual juniors prom.
                    </div>
                </a>
                <img id="img22" class="imageSquare" onmouseover="showInfo(22)" src="../assets/graphics/22.jpg" alt="22">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <a id="link23" href="#" onmouseout="hideInfo(23)" class="hid">
                    <div id="info23" class="info">
                    A christmas story poster - Poster for a Christmas party.
                    </div>
                </a>
                <img id="img23" class="imageSquare" onmouseover="showInfo(23)" src="../assets/graphics/23.jpg" alt="23">
            </div>
        </div>

    </div>  
    <div class="filler hidden-md-up">
    </div>  
</body>
</html>