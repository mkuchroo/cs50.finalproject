<?php

//including required php files    
  require("../includes/config.php"); 
    //dump($_POST);
    $games = query("SELECT * FROM `games` WHERE progress = ?", 0);
    $game_num = $games[0]["game_id"];
  // dump($games);
    query("UPDATE `games` SET `progress`=? WHERE game_id = ?", 1, $games[0]["game_id"]);
    
    $harvard_team_temp = query("SELECT `player_name` FROM `scorecards` WHERE game_num = ? AND team = ?", $games[0]["game_id"], 'Harvard');
    $opposition_temp = query('SELECT `player_name` FROM `scorecards` WHERE game_num = ? AND team = ?', $games[0]["game_id"], 'Opposition');
    //dump($harvard_team_temp);
    $harvard_team = [];
    $opposition = [];
    
    for ($i = 0 ; $i < 11 ; $i++)
    {
        $harvard_team[] = $harvard_team_temp[$i]["player_name"];
        $opposition[] = $opposition_temp[$i]["player_name"];
    }
    
    //dump($harvard_team);

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($games[0]["bat_first"] === 'Harvard')
        {
            for ($i = 0 ; $i < 11 ; $i++)
            {
                echo $i;
                $name = $harvard_team[$i];
                $bat_pos =$_POST["bat_pos_1_$i"];
                $run = $_POST["runs_1_$i"];
                $ball = $_POST["balls_1_$i"];
                $four = $_POST["4s_1_$i"];
                $six = $_POST["6s_1_$i"];
                $over = $_POST["bowl_overs_1_$i"];
                $dot = $_POST["dots_1_$i"];
                $run_given = $_POST["runs_given_1_$i"];
                $wick = $_POST["wickets_1_$i"];
                $out_bowl = $_POST["out_bowler_1_$i"];
                $out_h = $_POST["how_out_1_$i"];
                $bowl_num = $_POST["bowl_pos_1_$i"];
                
                $team = 'Harvard';
                
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $bat_pos, $run,
                    $ball, $four, $six,
                    $over, $dot, $run_given,
                    $wick ,$out_bowl, $out_h, 
                    $bowl_num, $name, $game_num, $team);
                
                $player_stats = query("SELECT * FROM `players` WHERE `name` = ?", $harvard_team[$i]);
                
                $games = $player_stats[0]["games"] + 1;
                $runs = $player_stats[0]["bat_runs"] + $_POST["runs_1_$i"];
                $balls = $player_stats[0]["bat_balls"] + $_POST["balls_1_$i"];
                $fifties = 0;
                $hundreds = 0;
                if ($player_stats[0]["bat_runs"] >= 100)
                    $hundreds = $player_stats[0]["100s"] + 1;
                else if ($player_stats[0]["bat_runs"] >= 50)
                    $fifties = $player_stats[0]["50s"] + 1;
                $fours = $player_stats[0]["4s"] + $_POST["4s_1_$i"];
                $sixs = $player_stats[0]["6s"] + $_POST["6s_1_$i"];
                $overs = $player_stats[0]["bowl_overs"] + $_POST["bowl_overs_1_$i"];
                $runs_given = $player_stats[0]["bowl_runs"] + $_POST["runs_given_1_$i"];
                $wickets = $player_stats[0]["bowl_wicket"] + $_POST["wickets_1_$i"];
                $not_out = $player_stats[0]["not_out"];
                if ($_POST["how_out_1_$i"] == "" && $player_stats[0]["bat_runs"] > 0)
                    $not_out = $not_out + 1;
                
                query("UPDATE `players` SET `not_out` =?,`games`=?,`bat_runs`=?,`bat_balls`=?,`50s`=?,`100s`=?,
                    `4s`=?,`6s`=?,`bowl_overs`=?,`bowl_runs`=?,`bowl_wicket`=? WHERE
                    `name`=?", $not_out, $games, $runs, $balls, $fifties, $hundreds, $fours, $sixs, $overs,
                    $runs_given, $wickets, $harvard_team[$i]);
                
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $_POST["bat_pos_2_$i"], $_POST["runs_2_$i"],
                    $_POST["balls_2_$i"], $_POST["4s_2_$i"], $_POST["6s_2_$i"],
                    $_POST["bowl_overs_2_$i"], $_POST["dots_2_$i"], $_POST["runs_given_2_$i"],
                    $_POST["wickets_2_$i"] ,$_POST["out_bowler_2_$i"], $_POST["how_out_2_$i"], 
                    $_POST["bowl_pos_2_$i"], $opposition[$i], $game_num, "Opposition");
            }
                query("INSERT INTO `scorecards`(`player_name`,`bat_num`, `runs`, `team`, `game_num`)
                    VALUES (?,?,?,?,?)", 'extras', 12, $_POST["extras_1"], 'Harvard', $game_num);
                query("INSERT INTO `scorecards`(`player_name`,`bat_num`, `runs`, `team`, `game_num`)
                    VALUES (?,?,?,?,?)", 'extras', 12, $_POST["extras_2"], 'Opposition', $game_num);
        }
        
        else
        {
            for ($i = 0 ; $i < 11 ; $i++)
            {
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $_POST["bat_pos_1_$i"], $_POST["runs_1_$i"],
                    $_POST["balls_1_$i"], $_POST["4s_1_$i"], $_POST["6s_21_$i"],
                    $_POST["bowl_overs_1_$i"], $_POST["dots_1_$i"], $_POST["runs_given_1_$i"],
                    $_POST["wickets_1_$i"] ,$_POST["out_bowler_1_$i"], $_POST["how_out_1_$i"], 
                    $_POST["bowl_pos_1_$i"], $opposition[$i], $game_num, 'Opposition');
                    
                $player_stats = query("SELECT * FROM `players` WHERE `name` = ?", $harvard_team[$i]);
                
                $games = $player_stats[0]["games"] + 1;
                $runs = $player_stats[0]["bat_runs"] + $_POST["runs_2_$i"];
                $balls = $player_stats[0]["bat_balls"] + $_POST["balls_2_$i"];
                $fifties = 0;
                $hundreds = 0;
                if ($player_stats[0]["bat_runs"] >= 100)
                    $hundreds = $player_stats[0]["100s"] + 1;
                else if ($player_stats[0]["bat_runs"] >= 50)
                    $fifties = $player_stats[0]["50s"] + 1;
                $fours = $player_stats[0]["4s"] + $_POST["4s_2_$i"];
                $sixs = $player_stats[0]["6s"] + $_POST["6s_2_$i"];
                $overs = $player_stats[0]["bowl_overs"] + $_POST["bowl_overs_2_$i"];
                $runs_given = $player_stats[0]["bowl_runs"] + $_POST["runs_given_2_$i"];
                $wickets = $player_stats[0]["bowl_wicket"] + $_POST["wickets_2_$i"];
                $not_out = $player_stats[0]["not_out"];
                if ($_POST["how_out_2_$i"] == "" && $player_stats[0]["bat_runs"] > 0)
                    $not_out = $not_out + 1;
                
                query("UPDATE `players` SET `not_out` =?,`games`=?,`bat_runs`=?,`bat_balls`=?,`50s`=?,`100s`=?,
                    `4s`=?,`6s`=?,`bowl_overs`=?,`bowl_runs`=?,`bowl_wicket`=? WHERE
                    `name`=?", $not_out, $games, $runs, $balls, $fifties, $hundreds, $fours, $sixs, $overs,
                    $runs_given, $wickets, $harvard_team[$i]);
                    
                query("UPDATE `scorecards` SET `bat_num`=?,`runs`=?, `balls`=?,`4s`=?,
                    `6s`=?,`overs`=?,`dots`=?,`runs_given`=?,`wickets`=?,`out_bowler`=?,
                    `out_how`=?, `bowl_num`=? WHERE player_name = ? AND
                    game_num = ? AND team = ?", $_POST["bat_pos_2_$i"], $_POST["runs_2_$i"],
                    $_POST["balls_2_$i"], $_POST["4s_2_$i"], $_POST["6s_2_$i"],
                    $_POST["bowl_overs_2_$i"], $_POST["dots_2_$i"], $_POST["runs_given_2_$i"],
                    $_POST["wickets_2_$i"] ,$_POST["out_bowler_2_$i"], $_POST["how_out_2_$i"], 
                    $_POST["bowl_pos_2_$i"], $harvard_team[$i], $game_num, "Harvard");
            }
                query("INSERT INTO `scorecards`(`player_name`,`bat_num`, `runs`, `team`, `game_num`)
                    VALUES (?,?,?,?,?)", 'extras', 12, $_POST["extras_2"], 'Harvard', $game_num);
                query("INSERT INTO `scorecards`(`player_name`,`bat_num`, `runs`, `team`, `game_num`)
                    VALUES (?,?,?,?,?)", 'extras', 12, $_POST["extras_1"], 'Opposition', $game_num);
        }
        redirect("/homepage_login.php");
    }
    
?>
