<?php

//including required php files    
   require("../includes/config.php"); 

    $players = query("SELECT name FROM `players` WHERE id = 0");
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
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        dump($_POST);
        if (empty($_POST["first_bat"]) || empty($_POST["ground"]))
            apologize("Sorry! You must enter game details!");
        if (empty($_POST["harvard_name_1"]) || empty($_POST["harvard_name_2"]) || empty($_POST["harvard_name_3"]) || empty($_POST["harvard_name_4"]) || empty($_POST["harvard_name_5"]) 
        || empty($_POST["harvard_name_6"]) || empty($_POST["harvard_name_7"]) || empty($_POST["harvard_name_8"]) || empty($_POST["harvard_name_9"]) || empty($_POST["harvard_name_10"])
        || empty($_POST["harvard_name_11"]))
            apologize("Sorry! You must provide a full Harvard 11!");
        if  (empty($_POST["opposition"]) || empty($_POST["player1"]) || empty($_POST["player2"]) || empty($_POST["player3"]) || empty($_POST["player4"]) || empty($_POST["player5"]) 
        || empty($_POST["player6"]) || empty($_POST["player7"]) || empty($_POST["player8"]) || empty($_POST["player9"]) || empty($_POST["player10"])
        || empty($_POST["player11"]))
            apologize("Sorry! You must provide a full 11 for the opposition as well as team name!");
       // dump($players);
        $harvard_team = [];
        $harvard_team[1] = $_POST["harvard_name_1"];
        $harvard_team[2] = $_POST["harvard_name_2"];
        $harvard_team[3] = $_POST["harvard_name_3"];
        $harvard_team[4] = $_POST["harvard_name_4"];
        $harvard_team[5] = $_POST["harvard_name_5"];
        $harvard_team[6] = $_POST["harvard_name_6"];
        $harvard_team[7] = $_POST["harvard_name_7"];
        $harvard_team[8] = $_POST["harvard_name_8"];
        $harvard_team[9] = $_POST["harvard_name_9"];
        $harvard_team[10] = $_POST["harvard_name_10"];
        $harvard_team[11] = $_POST["harvard_name_11"];
        
        $counter = 0;
        dump($harvard_team);
    }

?>
