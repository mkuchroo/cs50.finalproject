
<ul class="nav nav-pills">

    <li><a href="insert_player.php">Insert Player</a></li>
    <li><a href="insert_teams_scorecard.php">Insert Scorecard</a></li>
    <li><a href="insert_article.php">Insert Article</a></li>

</ul>

        <form action="input_scorecard.php" method="post">
            
            
            
            <fieldset>

            First Innings Batting
            </br>           
            
            <?for($i = 0; $i < 11 ; $i++ ):?>
            
            <div>
                <?echo $first_team[$i];?>


            <div class="control-group" style = "display:inline-block">
                    <select name="bat_pos_1.<?=$i?>" style = "width:60px">
                        <option value=""></option>
                        <?for($p = 1; $p < 12 ; $p++ )
                            echo '<option value="'.$p.'">'.$p.'</option>';?>
                    </select>
                </div>


            <div class="control-group" style = "display:inline-block">
                    <select name="how_out_1.<?=$i?>" style = "width:80px">
                        <option value=""></option>
                        <?echo '<option value="Bowled">Bowled</option>';?>
                        <?echo '<option value="Caught">Caught</option>';?>
                        <?echo '<option value="lbw">lbw</option>';?>
                        <?echo '<option value="Run Out">Run Out</option>';?>
                        <?echo '<option value="Hit Wicket">Hit Wicket</option>';?>
                    </select>
                </div>

            <div class="control-group"style = "display:inline-block">
                    <select name="out_bowler_1.<?=$i?>" style = "width:100px"
                        <option value=""></option>
                        <option value=""></option>
                    <?php
                        foreach($second_team as $row)
                            echo '<option value="'.$row.'">'.$row.'</option>';
                    ?>
                        <option value="not_out"></option>
                    </select>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="runs_1.<?=$i?>" placeholder="Runs" type="text"/>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="balls_1.<?=$i?>" placeholder="Balls" type="text"/>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="4s_1.<?=$i?>" placeholder="4s" type="text"/>
                </div>


                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="6s_1.<?=$i?>" placeholder="6s" type="text"/>
                </div>

            </div>
            
            </br>
            
            <?endfor?>
            
                <div class="control-group">
                    <input class="input-mini" name="extras_1" placeholder="Extras" type="text"/>
                </div>
            
            First Innings Bowling
            
            <?for ($i = 0 ; $i < 11 ; $i++):?>
            
            <div>
                <?echo $second_team[$i];?>


                <div class="control-group" style = "display:inline-block">
                    <select name="bowl_pos_2.<?=$i?>" style = "width:60px">
                        <option value=""></option>
                        <?for($p = 1; $p < 12 ; $p++ )
                            echo '<option value="'.$p.'">'.$p.'</option>';?>
                    </select>
                </div>
                
                <div class="control-group" style = "display:inline-block">
                    <select name="bowl_overs_2.<?=$i?>" style = "width:60px">
                        <option value=""></option>
                        <?for($p = 1; $p < 5; $p++ )
                            echo '<option value="'.$p.'">'.$p.'</option>';?>
                    </select>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="dots_2.<?=$i?>" placeholder="Dots" type="text"/>
                </div>
                
                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="runs_given_2.<?=$i?>" placeholder="Runs Given" type="text"/>
                </div>
                
                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="wickets_2.<?=$i?>" placeholder="Wickets" type="text"/>
                </div>
                
                
            </div>
            
            </br>
            
            <?endfor?>
                
            
            Second Innings Batting
            <?for($i = 0; $i < 11 ; $i++ ):?>
            
            <div>

                <?echo $second_team[$i];?>


            <div class="control-group" style = "display:inline-block">
                    <select name="bat_pos_2.<?=$i?>" style = "width:60px">
                        <option value=""></option>
                        <?for($p = 1; $p < 12 ; $p++ )
                            echo '<option value="'.$p.'">'.$p.'</option>';?>
                    </select>
                </div>


            <div class="control-group" style = "display:inline-block">
                    <select name="how_out_2.<?=$i?>" style = "width:80px">
                        <?echo '<option value=></option>';?>
                        <?echo '<option value="bowled">Bowled</option>';?>
                        <?echo '<option value="caught">Caught</option>';?>
                        <?echo '<option value="lbw">LBW</option>';?>
                        <?echo '<option value="run_out">Run Out</option>';?>
                        <?echo '<option value="hit_wicket">Hit Wicket</option>';?>
                    </select>
                </div>

            <div class="control-group"style = "display:inline-block">
                    <select name="out_bowler_2.<?=$i?>" style = "width:100px"
                    <option value=""></option>
                    <option value=""></option>
                    <?php
                        foreach($first_team as $row)
                            echo '<option value="'.$row.'">'.$row.'</option>';
                    ?>
                        <option value="not_out"></option>
                    </select>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="runs_2.<?=$i?>" placeholder="Runs" type="text"/>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="balls_2.<?=$i?>" placeholder="Balls" type="text"/>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="4s_2.<?=$i?>" placeholder="4s" type="text"/>
                </div>


                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="6s_2.<?=$i?>" placeholder="6s" type="text"/>
                </div>

            </div>
            
            </br>
           
            <?endfor?>
            
                <div class="control-group">
                    <input class="input-mini" name="extras_2" placeholder="Extras" type="text"/>
                </div>
            
            Second Innings Bowling
            
            <?for ($i = 0 ; $i < 11 ; $i++):?>
            
            <div>
                <?echo $first_team[$i];?>


                <div class="control-group" style = "display:inline-block">
                    <select name="bowl_pos_1.<?=$i?>" style = "width:60px">
                        <option value=""></option>
                        <?for($p = 1; $p < 12 ; $p++ )
                            echo '<option value="'.$p.'">'.$p.'</option>';?>
                    </select>
                </div>
                
                <div class="control-group" style = "display:inline-block">
                    <select name="bowl_overs_1.<?=$i?>" style = "width:60px">
                        <option value=""></option>
                        <?for($p = 1; $p < 5; $p++ )
                            echo '<option value="'.$p.'">'.$p.'</option>';?>
                    </select>
                </div>

                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="dots_1.<?=$i?>" placeholder="Dots" type="text"/>
                </div>
                
                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="runs_given_1.<?=$i?>" placeholder="Runs Given" type="text"/>
                </div>
                
                <div class="control-group" style = "display:inline-block">
                    <input class="input-mini" name="wickets_1.<?=$i?>" placeholder="Wickets" type="text"/>
                </div>
                
                
            </div>
            
            </br>
            
            <?endfor?>

            <div class="control-group">
                    <button type="submit" class="btn">Make Scorecard</button>
                </div>

            </fieldset>
            
            </form>


