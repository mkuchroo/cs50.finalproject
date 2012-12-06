<?php

//including required php files    
   require("../includes/config.php"); 

   render("../templates/insert_player_text.php");

   // $test = query("SELECT * FROM `players` WHERE id = 1");
    //dump($test);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["name"]))
            apologize("You must provide a Name.");
        else if (empty($_POST["number"]))
            apologize("You must provide a number.");
        else if (empty($_POST["games"]) && !($_POST["games"] == 0))
            apologize("You must provide Games Played.");
        else if (empty($_POST["bat_runs"]) && !($_POST["bat_runs"] == 0))
            apologize("You must provide Runs Scored.");
        else if (empty($_POST["bat_balls"]) && !($_POST["bat_balls"] == 0))
            apologize("You must provide Balls Faced.");
        else if (empty($_POST["50s"]) && !($_POST["50s"] == 0))
            apologize("You must provide 50s scored.");
        else if (empty($_POST["100s"]) && !($_POST["100s"] == 0))
            apologize("You must provide 100s scored.");
        else if (empty($_POST["4s"]) && !($_POST["4s"] == 0))
            apologize("You must provide 4s scored.");
        else if (empty($_POST["6s"]) && !($_POST["6s"] == 0))
            apologize("You must provide 6s scored.");
        else if (empty($_POST["bowl_overs"]) && !($_POST["bowl_overs"] == 0))
            apologize("You must provide Overs Bowled.");
        else if (empty($_POST["bowl_wicket"]) && !($_POST["bowl_wicket"] == 0))
            apologize("You must provide Wickets Taken.");
        else if (empty($_POST["bowl_runs"]) && !($_POST["bowl_runs"] == 0))
            apologize("You must provide Runs Scored.");
        else if (empty($_POST["bat_style"]) && !($_POST["bat_style"] == 0))
            apologize("You must provide the batting style of the batsman.");
        else if (empty($_POST["bowl_style"]) && !($_POST["bowl_style"] == 0))
            apologize("You must provide the bowling style of the bowler.");
        else if (empty($_POST["affiliation"]) && !($_POST["affiliation"] == 0))
            apologize("You must provide an affiliation.");
        else
        {
            query("INSERT INTO `players` (id, name, games, bat_runs, bat_balls, 50s, 100s, 4s, 6s, bowl_overs, bowl_wicket, bowl_runs, bat_style, bowl_style, description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $_POST["number"], $_POST["name"], $_POST["games"], $_POST["bat_runs"], $_POST["bat_balls"], $_POST["50s"], $_POST["100s"], $_POST["4s"], $_POST["6s"], $_POST["bowl_overs"], $_POST["bowl_wicket"], $_POST["bowl_runs"], $_POST["bat_style"], $_POST["bowl_style"], $_POST["affiliation"]);
            redirect("/homepage_login.php");
        }
     }

?>
