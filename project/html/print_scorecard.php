<?php

    require("../includes/config.php"); 

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $game_info = query("SELECT * FROM `games` WHERE game_id = ?", $_POST["game"]);
        //dump($game_info);
        $harvard_team = query("SELECT * FROM `scorecards` WHERE `game_num` = ? AND `team` = ?", $_POST["game"], 'Harvard');
        //dump($harvard_team);
        $opposition_team = query("SELECT * FROM `scorecards` WHERE `game_num` = ? AND `team` = ?", $_POST["game"], 'Opposition');
        //dump($opposition_team);
        
        $harvard_bowling = [];
        $opposition_bowling = [];
        $runs_harvard = 0;
        $runs_opposition = 0;
        
        for ($i = 0 ; $i < 12 ; $i++)
        {
            $runs_harvard += $harvard_team[$i]['runs'];
            $runs_opposition += $opposition_team[$i]['runs'];
        }
        
        if ($game_info[0]["bat_first"] === 'Harvard')
        {
            if ($game_info[0]["home"] === 'Harvard')
                render("../templates/print_scorecard_text.php", ["game_info"=> $game_info, "first_bat"=>$harvard_team, "second_bat"=>$opposition_team, 
                    "first_bowl"=>$opposition_bowling, "second_bowl"=>$harvard_bowling, "first_runs"=>$runs_harvard,
                    "second_runs"=>$runs_opposition]);
            else
                render("../templates/print_scorecard_text.php", ["game_info"=> $game_info, "first_bat"=>$harvard_team, "second_bat"=>$opposition_team, 
                    "first_bowl"=>$opposition_bowling, "second_bowl"=>$harvard_bowling, "first_runs"=>$runs_harvard,
                    "second_runs"=>$runs_opposition]);
        }
        
        else
        {
            if ($game_info[0]["home"] === 'Harvard')
                render("../templates/print_scorecard_text.php", ["game_info"=> $game_info, "second_bat"=>$harvard_team, "first_bat"=>$opposition_team, 
                    "second_bowl"=>$opposition_bowling, "first_bowl"=>$harvard_bowling, "first_runs"=>$runs_opposition,
                    "second_runs"=>$runs_harvard]);
            else
                render("../templates/print_scorecard_text.php", ["game_info"=> $game_info, "second_bat"=>$harvard_team, "first_bat"=>$opposition_team, 
                    "second_bowl"=>$opposition_bowling, "first_bowl"=>$harvard_bowling, "first_runs"=>$runs_opposition,
                    "second_runs"=>$runs_harvard]);
        }
    }

?>
