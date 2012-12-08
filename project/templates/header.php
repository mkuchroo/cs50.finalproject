<!DOCTYPE html>




    <head>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>

                    <title>Harvard Cricket</title>
        
        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
        
        <script>
    var Pic = new Array();

    Pic[0] = '../img/1885.jpg'
    Pic[1] = '../img/watermarked.jpg'
    Pic[2] = '../img/team_pic.jpg'

    var t;
    var j = 0;
    var p = Pic.length;
    var preLoad = new Array();
    for (i = 0; i < p; i++) 
    {
        preLoad[i] = new Image();
        preLoad[i].src = Pic[i];
    }
    
    
    
    //all images are loaded on client
    index = 0;
    function update(){
    if (preLoad[index]!= null){
    document.images['foto'].src = preLoad[index].src;
    index++;
    setTimeout(update, 3000);
    }

    }
    </script>


    </head>


    <body>
    
        <div class="container-fluid">
 
        <div id="top">
            <a href="/"><img alt="Harvard Cricket" src="img/logo.gif"/></a>
        </div>

        <div id="middle">

<ul class="nav nav-tabs">
<li class="active">
    <li><a href="about.php">About Cricket</a></li>
    <li><a href="rules.php">Rules of Cricket</a></li>
    <li><a href="team.php">Players</a></li>
    <li><a href="scores.php">Past Games</a></li>
    <li><a href="photos.php">Gallery</a></li>
    <li><a href="involve.php">Get Involved</a></li>
    <li><a href="login.php"><strong>Log In</strong></a></li>
</ul>

