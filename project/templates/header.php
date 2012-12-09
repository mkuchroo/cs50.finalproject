<!DOCTYPE html>

    <head>
    <!-- include bootstrap-->
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/bootswatch.less" rel="stylesheet"/>

                    <title>Harvard Cricket</title>
        
        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
        

        <script>
        
        /*
        
        Based on code from http://stackoverflow.com/questions/7891785/simple-text-message-or-image-before-javascript-finishes-on-html-page
        
        */
        
        //create array of pictures
        var Pic = new Array();

        Pic[0] = '../img/1885.jpg'
        Pic[1] = '../img/watermarked.jpg'
        Pic[2] = '../img/team_pic.jpg'

        //initialize variables
        var t;
        var j = 0;
        var p = Pic.length;
        var preLoad = new Array();
        
        //iterate through photos
        for (i = 0; i < p; i++) 
        {
            preLoad[i] = new Image();
            preLoad[i].src = Pic[i];
        }
        
        //all images are loaded on client
        index = 0;
        
        //flash through photos
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

        <!-- display logo -->
        <div id="top">
            <a href="/"><img alt="Harvard Cricket" src="img/logo.gif"/></a>
        </div>

        <div id="middle">

 <?
    $rows = query("SELECT * FROM users");
    $i = 0;
    
    foreach ($rows as $row)
    {
        foreach($_SESSION as $ids)
        {
            if ($ids != NULL && $ids == $row["id"])
            {
                echo "<ul class='nav nav-tabs'>";
                echo "<li class='active'>";
                print("<ul class='nav nav-pills'>");
                print("<li><a href='insert_player.php'>Insert Player</a></li>");
                print("<li><a href='insert_teams_scorecard.php'>Insert Scorecard</a></li>");
                print("<li><a href='insert_article.php'>Insert Article</a></li>");
                print("<li><a href='insert_photo.php'>Insert Photo</a></li>");
                print("<li><a href='logout.php'>Log Out</a></li>");
                print("</ul>");
                $i = 1; 
            }       
        }
        if ($i == 1)
            break;
    }
    if ($i == 0)
    {
        print('<ul class="nav nav-tabs">');
        print('<li class="active">');
        print('<li><a href="about.php">about cricket</a></li>');
        print('<li><a href="rules.php">rules of cricket</a></li>');
        print('<li><a href="team.php">players</a></li>');
        print('<li><a href="scores.php">past games</a></li>');
        print('<li><a href="photos.php">gallery</a></li>');
        print('<li><a href="involve.php">get involved</a></li>');
        print('<li><a href="login.php"><strong>log in</strong></a></li>');
        print('</ul>');
    }
?>
