<?php

//including required php files    
  require("../includes/config.php"); 
    
    //dump($_POST);
    $games = query("SELECT * FROM `games` WHERE progress = ?", 0);
    //dump($games);
   // query("UPDATE `games` SET `progress`=? WHERE game_id = ?", 1, $games[0]["game_id"]);
    
    $harvard_team_temp = query("SELECT `player_name` FROM `scorecards` WHERE game_num = ? AND team = ?", $games[0]["game_id"], 'Harvard');
    $opposition_temp = query('SELECT `player_name` FROM `scorecards` WHERE game_num = ? AND team = ?', $games[0]["game_id"], 'Opposition');
    
    $harvard_team = [];
    $opposition = [];
    
    for ($i = 0 ; $i < 11 ; $i++)
    {
        $harvard_team[] = $harvard_team_temp[$i]["player_name"];
        $opposition[] = $opposition_temp[$i]["player_name"];
    }
    
    //dump($opposition);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($games[0]["bat_first"] === 'Harvard')
            for ($i = 0 ; $i < 11 ; $i++)
            {
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $_POST["bat_pos_1_$i"], $_POST["runs_1_$i"],
                    $_POST["balls_1_$i"], $_POST["4s_1_$i"], $_POST["6s_1_$i"],
                    $_POST["bowl_overs_1_$i"], $_POST["dots_1_$i"], $_POST["runs_given_1_$i"],
                    $_POST["wickets_1_$i"] ,$_POST["out_bowler_1_$i"], $_POST["how_out_1_$i"], 
                    $_POST["bowl_pos_1_$i"], $harvard_team[$i], $games[0]["game_id"], 'Harvard');
                    
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $_POST["bat_pos_2_$i"], $_POST["runs_2_$i"],
                    $_POST["balls_2_$i"], $_POST["4s_2_$i"], $_POST["6s_2_$i"],
                    $_POST["bowl_overs_2_$i"], $_POST["dots_2_$i"], $_POST["runs_given_2_$i"],
                    $_POST["wickets_2_$i"] ,$_POST["out_bowler_2_$i"], $_POST["how_out_2_$i"], 
                    $_POST["bowl_pos_2_$i"], $opposition[$i], $games[0]["game_id"], "Opposition");
            }
                    
        else
        {
            for ($i = 0 ; $i < 11 ; $i++)
            {
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $_POST["bat_pos_1_$i"], $_POST["runs_1_$i"],
                    $_POST["balls_1_$i"], $_POST["4s_1_$i"], $_POST["6s_1_$i"],
                    $_POST["bowl_overs_1_$i"], $_POST["dots_1_$i"], $_POST["runs_given_1_$i"],
                    $_POST["wickets_1_$i"] ,$_POST["out_bowler_1_$i"], $_POST["how_out_1_$i"], 
                    $_POST["bowl_pos_1_$i"], $opposition[$i], $games[0]["game_id"], 'Opposition');
                    
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $_POST["bat_pos_2_$i"], $_POST["runs_2_$i"],
                    $_POST["balls_2_$i"], $_POST["4s_2_$i"], $_POST["6s_2_$i"],
                    $_POST["bowl_overs_2_$i"], $_POST["dots_2_$i"], $_POST["runs_given_2_$i"],
                    $_POST["wickets_2_$i"] ,$_POST["out_bowler_2_$i"], $_POST["how_out_2_$i"], 
                    $_POST["bowl_pos_2_$i"], $harvard_team[$i], $games[0]["game_id"], "Harvard");
            }
        }
    }
    
?>
