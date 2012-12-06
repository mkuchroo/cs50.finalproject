<?php

//including required php files    
   require("../includes/config.php"); 

    $players = query("SELECT * FROM `players`");
    //dump($players);
    $teams = query("SELECT team_name FROM `teams`");
   // $player_names = ["name" => "Harvard Team"];
    //$i = 0;
    //$temp;
   // $player = [];
    foreach ($players as $player)
    {
        $player_names[] = $player["name"];
     //   
        // = $temp;
    }
    foreach ($teams as $team)
    {
        $team_name[] = $team["team_name"];
    }
    //dump($team_name);

//    render("../templates/insert_player_text.php");
    render("../templates/insert_teams_scorecard_text.php", ["players"=>$player_names, "teams" => $team_name]);
    

?>
