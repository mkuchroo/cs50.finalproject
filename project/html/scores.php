<?php

    //configuration
    require("../includes/config.php"); 
    
    // render form
    $games = query("SELECT `date`, `game_id`, `home`, `away` FROM `games` WHERE `progress` = ?", 1);

    render("../templates/scores_form.php", ["games"=> $games]);
    
    
    
?>
