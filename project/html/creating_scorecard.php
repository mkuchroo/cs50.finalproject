<?php

//including required php files    
  require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //$temp_player = query("SELECT * FROM `players` WHERE name = ?", $_POST["harvard_name_1"]);
        //dump($_POST);
        if (empty($_POST["date"]))
            apologize("Sorry! Please enter a date!");
        if (empty($_POST["toss"]))
            apologize("Sorry! Enter who won the toss!");
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
            
           
        
        if ($_POST["ground"] === "Harvard")
            query("INSERT INTO `games`(`date`, `home`, `away`, `toss`, `bat_first`,`progress`)
                VALUES (?,?,?,?,?,?)", $_POST['date'],'Harvard', $_POST['opposition'],
                $_POST['toss'], $_POST['first_bat'],0);
        else
            query("INSERT INTO `games`(`date`, `home`, `away`, `toss`, `bat_first`,`progress`)
                VALUES (?,?,?,?,?,?)", $_POST['date'], $_POST['opposition'], 'Harvard',
                $_POST['toss'], $_POST['first_bat'],0);
        
        $game = query("SELECT * FROM `games` WHERE `date` = ?", $_POST['date']);
    
        $harvard_team = [];
        $opposition_team = [];
        for ($i = 1 ; $i < 12 ; $i++)
        {
            $harvard_team[] = $_POST["harvard_name_$i"];
            query("INSERT INTO `scorecards`(`player_name`, `game_num`, `team`)
             VALUES (?,?,?)", $_POST["harvard_name_$i"], $game[0]["game_id"], 'Harvard');
        }
        for ($i = 1 ; $i < 12 ; $i++)
        {
            $opposition_team[] = $_POST["player$i"];
            query("INSERT INTO `scorecards`(`player_name`, `game_num`, `team`)
             VALUES (?,?,?)", $_POST["player$i"], $game[0]["game_id"], 'Opposition');
        }

         

    
   /* $harvard_team = query("SELECT * FROM `scorecards WHERE `game#` = ? AND `team` = ?",
        $game["game_id"], 'Harvard');
        
   $opposition_team[] = query("SELECT * FROM `scorecards WHERE `game#` = ? AND `team` = ?",
        $game["game_id"], 'Opposition'); */
    
    if ($_POST["first_bat"] === 'Harvard')
        render("../templates/insert_team_scorecard_runs.php",
            ["first_team"=>$harvard_team, "second_team" => $opposition_team]);
    else
        render("../templates/insert_team_scorecard_runs.php",
            ["first_team"=> $opposition_team, "second_team" => $harvard_team]);
     }
   
?>
