<?php

    //configuration
    require("../includes/config.php"); 
    

    //if player has been selected
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //ensure proper usage
        if ($_POST["symbol"] == "name")
        {
            apologize("Please choose a player");
        }
        
        //remember name
        $name = $_POST["symbol"];
            
        //save game data
        $player = query("SELECT id, games, bat_runs, bat_balls, 50s, 100s, 4s, 6s, bowl_overs, bowl_runs, bowl_wicket, bat_style, bowl_style, description, image FROM players WHERE name = ?", $name); 
        
        //render form
        render ("players.php", ["player" => $player, "name" => $name]);
    }
    //otherwise render form
    else 
    {
        $names = query("SELECT name FROM players"); 
        render("team_form.php", ["names" => $names]);
    }

