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
<body onload="paral(),setIcons(17)">

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
            <?php  echo file_get_contents("../assets/code.svg"); ?>
        </div>
        <div class="parallaxTitle" data-depth="0.8">
            OBJECT
            </br>
            ORIENTED
            </br>
            PROGRAMMING
            <div class="parallaxSubTitle">
               SOME KIND OF DESIGN, BUT ON PATTERNS
            </div>
        </div>
    </div>

    <div class="container-fluid" >

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="description">
                   I start programming since i was 6 years old with borland Pascal. Since then i swapped over C and C++, a bit of C# 
                   part of Unity development and PHP as main web back-end solution.
                   Beside oop technologies i often code in Javascript, Verilog and Matlab.
                </br>
                    Below are some of the projects developed by me, or where i was part of the development team.
                </div>
            </div>
        </div>
    </div>
    <div class="container" >

        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link1" href="https://en.wikipedia.org/wiki/Connect_Four" onmouseout="hideInfo(1)" class="hid">
                    <div id="info1" class="info">
                        Connect Four - First one who make 4 dots on column/ row/ diagonal wins, but be careful, dots can't float.
                        </br></br>
                        Developed in C++ & WinBGI + graphics.h
                    </div>
                </a>
                <img id="img1" class="imageSquare" onmouseover="showInfo(1)" src="../assets/oop/1.jpg" alt="1">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link2" href="https://en.wikipedia.org/wiki/Concentration_(game)" onmouseout="hideInfo(2)" class="hid">
                    <div id="info2" class="info">
                        Memory game - Memorise the symbols and match them 2 by 2.
                        </br></br>
                        Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img2" class="imageSquare" onmouseover="showInfo(2)" src="../assets/oop/2.jpg" alt="2">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link3" href="#" onmouseout="hideInfo(3)" class="hid">
                    <div id="info3" class="info">
                        Memory game - Memorise the colours and recreate the sequence.
                        </br></br>
                        Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img3" class="imageSquare" onmouseover="showInfo(3)" src="../assets/oop/3.jpg" alt="3">
            </div>
            <div class="col-12 col-md-12 col-lg-9">
                <a id="link4" href="#" onmouseout="hideInfo(4)" class="hid">
                    <div id="info4" class="info">
                        Verificatron - Project management system that tracks target vs realisation progress.
                        </br></br>
                        Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img4" class="imageSquare" onmouseover="showInfo(4)" src="../assets/oop/4.gif" alt="4">
            </div>
            <div class="col-12 col-md-6 offset-md-3 col-lg-3 offset-lg-0">
                <a id="link5" href="https://en.wikipedia.org/wiki/Mastermind_(board_game)" onmouseout="hideInfo(5)" class="hid">
                    <div id="info5" class="info">
                        Mastermind - Guess the secret combination. A white dot means that you matched a color, but it's in the wrong place
                        while a red dot means you got a right color on the right position. Can you solve it in less than 10 tries?
                        </br></br>
                        Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img5" class="imageSquare" onmouseover="showInfo(5)" src="../assets/oop/5.jpg" alt="5">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link6" href="https://en.wikipedia.org/wiki/Conway%27s_Game_of_Life" onmouseout="hideInfo(6)" class="hid">
                    <div id="info6" class="info">
                        Game of Life - Simulation based on "Game of Life" rules.
                        </br></br>
                        Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img6" class="imageSquare" onmouseover="showInfo(6)" src="../assets/oop/6.jpg" alt="6">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link7" href="https://en.wikipedia.org/wiki/Minesweeper_(video_game)" onmouseout="hideInfo(7)" class="hid">
                    <div id="info7" class="info">
                        Minesweeper - Minesweeper game. 
                        </br></br>
                        Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img7" class="imageSquare" onmouseover="showInfo(7)" src="../assets/oop/7.jpg" alt="7">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link8" href="http://howtoman.andumy.ro" onmouseout="hideInfo(8)" class="hid">
                    <div id="info8" class="info">
                         How to Man - WebGL game, part of 2015 "Night of the living devs" hackaton, third place. 
                      Worked together with Andrei Barbu and Julian Atanasoae.
                      </br></br>
                      Developed in Unity & C#
                    </div>
                </a>
                <img id="img8" class="imageSquare" onmouseover="showInfo(8)" src="../assets/oop/8.jpg" alt="8">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link9" href="#" onmouseout="hideInfo(9)" class="hid">
                    <div id="info9" class="info">
                         Minify - Platform that analyse automatic system with their states and minify the overall system
                         based on equivalent states.
                      </br></br>
                      Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img9" class="imageSquare" onmouseover="showInfo(9)" src="../assets/oop/9.gif" alt="9">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link10" href="#" onmouseout="hideInfo(10)" class="hid">
                    <div id="info10" class="info">
                         Racin' Gang - Game developed in 3 months part of Gamecelerator project organised by Ubisoft.
                         Developed with Andrei Barbu, Beciu Alexandru, Frum Virgil Anton and Ioan Theodor.
                      </br></br>
                      Developed in Unity & C#
                    </div>
                </a>
                <img id="img10" class="imageSquare" onmouseover="showInfo(10)" src="../assets/oop/10.gif" alt="10">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link11" href="https://en.wikipedia.org/wiki/15_puzzle" onmouseout="hideInfo(11)" class="hid">
                    <div id="info11" class="info">
                         Puzzle 15 - The clasical game "puzzle 15".
                      </br></br>
                      Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img11" class="imageSquare" onmouseover="showInfo(11)" src="../assets/oop/11.jpg" alt="11">
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a id="link12" href="#" onmouseout="hideInfo(12)" class="hid">
                    <div id="info12" class="info">
                         Center of mass - Aplication that allows you to calculate the center of mass of various shapes.
                      </br></br>
                      Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img12" class="imageSquare" onmouseover="showInfo(12)" src="../assets/oop/12.jpg" alt="12">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link13" href="https://en.wikipedia.org/wiki/Snake_(video_game_genre)" onmouseout="hideInfo(13)" class="hid">
                    <div id="info13" class="info">
                         Snake - The clasical game "snake", with a few custom modes like frenzy mode where the snake grows x3.
                      </br></br>
                      Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img13" class="imageSquare" onmouseover="showInfo(13)" src="../assets/oop/13.jpg" alt="13">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link14" href="https://en.wikipedia.org/wiki/Tower_of_Hanoi" onmouseout="hideInfo(14)" class="hid">
                    <div id="info14" class="info">
                         Towers of Hanoi - Move all the rings from tower 1 to tower 2, but be careful, you can move only one disk
                         and never a larger disk can stay on a smaller one.
                      </br></br>
                      Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img14" class="imageSquare" onmouseover="showInfo(14)" src="../assets/oop/14.jpg" alt="14">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link15" href="#" onmouseout="hideInfo(15)" class="hid">
                    <div id="info15" class="info">
                         Mouse catcher - move the red bar left and right with your mouse so that it won't hit the white falling bars.
                      </br></br>
                      Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img15" class="imageSquare" onmouseover="showInfo(15)" src="../assets/oop/15.jpg" alt="15">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a id="link16" href="https://en.wikipedia.org/wiki/Hangman_(game)" onmouseout="hideInfo(16)" class="hid">
                    <div id="info16" class="info">
                        Hangman - Guess the word letter by letter.
                      </br></br>
                      Developed in C++ & WinBGI + graphics.h 
                    </div>
                </a>
                <img id="img16" class="imageSquare" onmouseover="showInfo(16)" src="../assets/oop/16.jpg" alt="16">
            </div>
        </div>

    </div>    
    <div class="filler hidden-md-up">
    </div>
</body>
</html>