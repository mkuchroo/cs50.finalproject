<?php

    //configuration
    require("../includes/config.php"); 
    
    
    $gallery = query("SELECT image FROM gallery");
    
    $length = count($gallery);
    
    // render form
    render("photo_form.php", ["gallery" => $gallery, "length" => $length]);
    

?>
