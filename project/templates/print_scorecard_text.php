

<?   echo $game_info[0]["away"] . " at " . $game_info[0]["home"] . " on " . $game_info[0]["date"];?>

<p>

<?   
    if ($game_info[0]["toss"] === 'Harvard')
    {
        if($game_info[0]["bat_first"] === 'Harvard')
            echo "Harvard won the toss and chose to Bat";
        else
            echo "Harvard won the toss and chose to Field";
    }
    else
    {
        if($game_info[0]["home"] === 'Harvard')
        {
            if ($game_info[0]["bat_first"] === 'Harvard')
                echo $game_info[0]["away"] . " won the toss and chose to Field";
            else
                echo $game_info[0]["away"] . " won the toss and chose to Bat";
        }
    }

?>
<p>

<?   echo "1st Innings Batting"?>

<p>

<? echo "Name Runs Balls 4s 6s"; ?>

<p>

<?  for($batting_order = 1; $batting_order < 13 ; $batting_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($first_bat[$i]['bat_num'] == $batting_order)
            {
                    echo $first_bat[$i]['player_name'] . " ";
                    if ($first_bat[$i]['out_how'] == "0" && $first_bat[$i]['runs'] != 0 && $first_bat[$i]['balls']!=0)
                        echo "Not Out ";
                    else if ($first_bat[$i]['out_how'] == "0" && $first_bat[$i]['runs'] == 0 && $first_bat[$i]['balls']==0)
                        echo "Did Not Bat ";
                    else if ($first_bat[$i]['out_how'] == "Run Out")
                        echo "Run Out ";
                    else
                        echo $first_bat[$i]['out_how'] . " " . $first_bat[$i]['out_bowler'] . " ";
                    echo $first_bat[$i]['runs'] . " " . $first_bat[$i]['balls'] . " " . $first_bat[$i]['4s'] . " " . $first_bat[$i]['6s'];     
            }
            
            echo "<p>";
        }
        
    }
    //echo $first_bat[11]['player_name'] . " " . $first_bat[11]['runs'];
    echo "<p>";
    echo $first_runs;
?>

<p>

<?   echo "1st Innings Bowling"?>

<p>

<? echo "Name Overs Dots Runs Wickets";?>

<p>

<? 

  for($bowling_order = 1; $bowling_order < 12 ; $bowling_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($second_bat[$i]['bowl_num'] == $bowling_order)
            {
                echo $second_bat[$i]['player_name'] . " " . $second_bat[$i]['overs']. " " . $second_bat[$i]['dots']. " " .
                    $second_bat[$i]['runs_given']. " " .$second_bat[$i]['wickets'];
            }
            echo "<p>";
        }
    }
?>


<?   echo "2nd Innings Batting"?>

<p>

<? echo "Name Runs Balls 4s 6s"; ?>

<p>

<?  for($batting_order = 1; $batting_order < 13 ; $batting_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($second_bat[$i]['bat_num'] == $batting_order)
            {
                    echo $second_bat[$i]['player_name'] . " ";
                    if ($second_bat[$i]['out_how'] == "")
                        echo "Not Out ";
                    else if ($second_bat[$i]['out_how'] == "Run Out")
                        echo "Run Out ";
                    else
                        echo $second_bat[$i]['out_how'] . " " . $second_bat[$i]['out_bowler'] . " ";
                    echo $second_bat[$i]['runs'] . " " . $second_bat[$i]['balls'] . " " . $second_bat[$i]['4s'] . " " . $second_bat[$i]['6s'];               
            }

            echo "<p>";
        }
    }
   // echo $second_bat[11]['player_name'] . " " . $second_bat[11]['runs'];
    echo "<p>";
    echo $second_runs
?>

<p>

<?   echo "2nd Innings Bowling"?>

<p>

<? echo "Name Overs Dots Runs Wickets"; 

  for($bowling_order = 1; $bowling_order < 12 ; $bowling_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($first_bat[$i]['bowl_num'] == $bowling_order)
            {
                echo $first_bat[$i]['player_name'] . " " . $first_bat[$i]['overs']. " " . $first_bat[$i]['dots']. " " .
                    $first_bat[$i]['runs_given']. " " .$first_bat[$i]['wickets'];
            }
            echo "<p>";
        }
    }
?>

<p>

<?  if ($second_runs > $first_runs)
        if($game_info[0]["bat_first"] === 'Harvard')
            if ($game_info[0]["home"]  === 'Harvard')
                echo $game_info[0]["away"] . " Won.";
            else
                echo $game_info[0]["home"] . " Won.";
        else
            if ($game_info[0]["home"]  === 'Harvard')
                echo $game_info[0]["home"] . " Won.";
            else
                echo $game_info[0]["away"] . " Won.";
    else if ($second_runs < $first_runs)
        if($game_info[0]["bat_first"] === 'Harvard')
            if ($game_info[0]["home"]  === 'Harvard')
                echo $game_info[0]["home"] . " Won.";
            else
                echo $game_info[0]["away"] . " Won.";
        else
            if ($game_info[0]["home"]  === 'Harvard')
                echo $game_info[0]["away"] . " Won.";
            else
                echo $game_info[0]["home"] . " Won.";
    else
        echo "The Game was Tied"; ?>
