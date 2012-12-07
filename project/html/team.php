<?php

    //configuration
    require("../includes/config.php"); 
    


    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["symbol"];
        $player = query("SELECT games, bat_runs, bat_balls, 50s, 100s, 4s, 6s, bowl_overs, bowl_runs, bowl_wicket, bat_style, bowl_style, description, image FROM players WHERE name = ?", $name); 
        render ("players.php", ["player" => $player, "name" => $name]);
    }
    // render form
    else 
    {
        $names = query("SELECT name FROM players"); 
        render("team_form.php", ["names" => $names]);
    }
?>
