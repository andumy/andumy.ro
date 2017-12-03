<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css"></link>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:100,300,400,900" rel="stylesheet">

    <script type="text/javascript" src="js/main.js"></script>
</head>
<body onload="initialDisplay(),slide()" >
    <nav class="navbar navbar-light navbar-transparent fixed-bottom">
            <div class="navbar-nav">
                
                <a class="nav-item nav-link" href="#3dgraphics">3D Graphics</a>
                <a class="nav-item nav-link" href="#branding">Branding</a>
                <a class="nav-item nav-link" href="#aboutme">About me</a>
                <a class="nav-item nav-link" href="#webdevelopment">Web development</a>
                <a class="nav-item nav-link" href="#oop">OOP</a>
            </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 offset-xl-2">
               <div id="portrait" class="portrait">
                    <?php echo file_get_contents("assets/face.svg"); ?>
               </div>
            </div>
            <div class="col-xl-3 offset-xl-2">
                <div id="headline" class="headline">
                    ANDREI
                    </br>
                    DUMITRESCU
                    <div id="subheadline" class="subheadline">
                        FULL STACK WEB DEVELOPER
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>