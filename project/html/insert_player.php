<?php

//including required php files    
   require("../includes/config.php"); 

   render("../templates/insert_player_text.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["name"]))
            apologize("You must provide a Name.");
        else if (empty($_POST["games"]))
            $_POST["games"] = 0;
        else if (empty($_POST["bat_runs"]))
            $_POST["bat_runs"] = 0;
        else if (empty($_POST["bat_balls"]))
            $_POST["bat_balls"] = 0;
        else if (empty($_POST["50s"]))
            $_POST["50s"] = 0;
        else if (empty($_POST["100s"]))
            $_POST["100s"] = 0;
        else if (empty($_POST["4s"]))
            $_POST["4s"] = 0;
        else if (empty($_POST["6s"]))
            $_POST["6s"] = 0;
        else if (empty($_POST["bowl_overs"]))
            $_POST["bowl_overs"] = 0;
        else if (empty($_POST["bowl_wicket"]))
            $_POST["bowl_wicket"] = 0;
        else if (empty($_POST["bowl_runs"]))
            $_POST["bowl_runs"] = 0;
        else if (empty($_POST["bat_style"]))
            apologize("You must provide the batting style of the batsman.");
        else if (empty($_POST["bowl_style"]))
            apologize("You must provide the bowling style of the bowler.");
        else if (empty($_POST["affiliation"]))
            apologize("You must provide an affiliation.");
        else
            query("INSERT INTO `players` (name, games, bat_runs, bat_balls, 50s, 100s, 4s, 6s, bowl_overs, bowl_wicket, bowl_runs, bat_style, bowl_style, description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $_POST["name"], $_POST["games"], $_POST["bat_runs"], $_POST["bat_balls"], $_POST["50s"], $_POST["100s"], $_POST["4s"], $_POST["6s"], $_POST["bowl_overs"], $_POST["bowl_wicket"], $_POST["bowl_runs"], $_POST["bat_style"], $_POST["bowl_style"], $_POST["description"]);
     }       
       
?>
