<?php

    // configuration
    require("../includes/config.php"); 

?>
    <center><img name="foto" width = "400" height = "200"></center>
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

<?php
    // render portfolio
    render("homepage.php", ["title" => "Harvard Cricket"]);

?>
