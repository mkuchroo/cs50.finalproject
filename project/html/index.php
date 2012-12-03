<?php

    // configuration
    require("../includes/config.php"); 
?>

<center><img name="foto"></center>
<script>
    var Pic = new Array();

    Pic[0] = '../img/construction.gif'
    Pic[1] = '../img/logo.gif'
    Pic[2] = '../img/team_pic.gif'

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
