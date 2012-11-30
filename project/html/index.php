<?php

    // configuration
    require("../includes/config.php"); 
?>
 
    <img name="slideImg" src="logo.gif" width = 500 height = 375 border = 0>
    <body onLoad = "switchImage('slideImg')">
    
<?php
    // render portfolio
    render("homepage.php", ["title" => "Harvard Cricket"]);

?>
