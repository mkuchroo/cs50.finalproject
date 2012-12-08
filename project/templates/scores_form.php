

    <form action="print_scorecard.php" method="post">
        <fieldset>
           <div class="control-group">
                    <select name="game">
                        <option value=""></option>
                        <?foreach($games as $game)
                            echo '<option value="'.$game['game_id'].'">'.$game['away'].' at '. $game['home'].' on '.$game['date'].'</option>';?>
                    </select>
           </div>  
                <div class="control-group">
                    <button type="submit" class="btn">See Scorecard</button>
                </div>
        </fieldset>
    </form>
                
