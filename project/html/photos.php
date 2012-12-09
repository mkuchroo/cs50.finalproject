<?php

    //configuration
    require("../includes/config.php"); 
    
    //get images from gallery
    $gallery = query("SELECT image FROM gallery");
    
    //define number of images in gallery
    $length = count($gallery);
    
    // render form
    render("photo_form.php", ["gallery" => $gallery, "length" => $length]);
    

?>
