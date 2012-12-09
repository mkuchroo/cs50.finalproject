

<?   echo$game_info[0]["away"]. " at " . $game_info[0]["home"] . " on " . $game_info[0]["date"];?>

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

<font size = "5">1st Innings Batting</font>

<p>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <th>How Out </th>
            <th>Bowler </th>
            <th>Runs</th>
            <th>Balls</th>
            <th>4s</th>
            <th>6s</th>
        </tr>
    </thead>

    <tbody>

<?php

   for($batting_order = 1; $batting_order < 13 ; $batting_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($first_bat[$i]['bat_num'] == $batting_order)
            {
                    print("<tr>");
                    print("<td>". $first_bat[$i]['player_name'] . "</td>");
                    print("<td>". $first_bat[$i]['out_how']."</td>");
                    print("<td>". $first_bat[$i]['out_bowler'] . "</td>");
                    print("<td>".$first_bat[$i]['runs'] ."</td>");
                    print("<td>". $first_bat[$i]['balls'] . "</td>");
                    print("<td>".$first_bat[$i]['4s'] . "</td>");
                    print("<td>".$first_bat[$i]['6s'] . "</td>");
                    print("</tr>");  
            }
       
        }
   }
   print("<td>".$first_bat[11]['player_name'] . "</td>");
   print("<td>"."</td>");
   print("<td>"."</td>");
   print("<td>". $first_bat[11]['runs'] . "</td>");
   print("</tr>");
   print("<td> Total </td>");
      print("<td>"."</td>");
   print("<td>"."</td>");
   print("<td>". $first_runs . "</td>");
   print("</tr>");
?>        

    </tbody>

</table>



<p>

<?
?>

<p>

<font size = "5">1st Innings Bowling</font>

<p>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <th>Overs</th>
            <th>Dots</th>
            <th>Runs</th>
            <th>Wickets</th>
        </tr>
    </thead>

    <tbody>

<? 

  for($bowling_order = 1; $bowling_order < 12 ; $bowling_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($second_bat[$i]['bowl_num'] == $bowling_order)
            {
                    print("<tr>");
                    print("<td>". $second_bat[$i]['player_name'] . "</td>");
                    print("<td>". $second_bat[$i]['overs']."</td>");
                    print("<td>". $second_bat[$i]['dots'] . "</td>");
                    print("<td>".$second_bat[$i]['runs_given'] ."</td>");
                    print("<td>". $second_bat[$i]['wickets'] . "</td>");
                    print("</tr>");  

            }
            echo "<p>";
        }
    }
?>
    </tbody>
    </table>
<p>
<font size = "5">2nd Innings Batting</font>

<p>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <th>How Out </th>
            <th>Bowler </th>
            <th>Runs</th>
            <th>Balls</th>
            <th>4s</th>
            <th>6s</th>
        </tr>
    </thead>

    <tbody>

    <tbody>

<?php

   for($batting_order = 1; $batting_order < 13 ; $batting_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($second_bat[$i]['bat_num'] == $batting_order)
            {
                    print("<tr>");
                    print("<td>". $second_bat[$i]['player_name'] . "</td>");
                    print("<td>". $second_bat[$i]['out_how']."</td>");
                    print("<td>". $second_bat[$i]['out_bowler'] . "</td>");
                    print("<td>".$second_bat[$i]['runs'] ."</td>");
                    print("<td>". $second_bat[$i]['balls'] . "</td>");
                    print("<td>".$second_bat[$i]['4s'] . "</td>");
                    print("<td>".$second_bat[$i]['6s'] . "</td>");
                    print("</tr>");  
            }
       
        }
   }
   print("<td>".$second_bat[11]['player_name'] . "</td>");
   print("<td>"."</td>");
   print("<td>"."</td>");
   print("<td>". $second_bat[11]['runs'] . "</td>");
   print("</tr>");
   print("<td> Total </td>");
      print("<td>"."</td>");
   print("<td>"."</td>");
   print("<td>". $second_runs . "</td>");
   print("</tr>");
?>        

    </tbody>

</table>


<p>


<p>

<font size = "5">2nd Innings Bowling</font>

<p>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Name</th>
            <th>Overs</th>
            <th>Dots</th>
            <th>Runs</th>
            <th>Wickets</th>
        </tr>
    </thead>

    <tbody>

<? 

  for($bowling_order = 1; $bowling_order < 12 ; $bowling_order++)
    {
        for($i = 0 ; $i < 11 ; $i++)
        {
            if ($first_bat[$i]['bowl_num'] == $bowling_order)
            {
                    print("<tr>");
                    print("<td>". $first_bat[$i]['player_name'] . "</td>");
                    print("<td>". $first_bat[$i]['overs']."</td>");
                    print("<td>". $first_bat[$i]['dots'] . "</td>");
                    print("<td>".$first_bat[$i]['runs_given'] ."</td>");
                    print("<td>". $first_bat[$i]['wickets'] . "</td>");
                    print("</tr>");  

            }
            echo "<p>";
        }
    }
?>
    </tbody>
    </table>

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
