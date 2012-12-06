<html>

<? //dump($players); ?>

<ul class="nav nav-pills">

    <li><a href="insert_player.php">Insert Player</a></li>
    <li><a href="insert_teams_scorecard.php">Insert Scorecard</a></li>
    <li><a href="insert_article.php">Insert Article</a></li>

</ul>
    <body>

        <form action="insert_teams_scorecard.php" method="post">
            <fieldset>
        <div class="control-group">
            <input class="input-medium" name="date" placeholder="Date (MM/DD/YYYY)" type="text"/>
        </div>

        <div id="top">
                Team Batting First
            </div>

            <div id="middle">

                <div class="control-group">
                    <select name="first_bat">
                        <option value=""></option>
                        <?php
                            foreach($teams as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div id="top">
                    Home Team
                </div>

            <div id="middle">
                <div class="control-group">
                    <select name="ground">
                        <option value=""></option>
                        <?php
                            foreach($teams as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
            <fieldset>
        <form>

        <div id="top">
                Harvard Team
            </div>

            <div id="middle">

        <form action="insert_teams_scorecard.php" method="post">
            <fieldset>
                <div class="control-group">
                    <select name="harvard_name_1">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ".  $row . ">" . $row .  "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_2">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_3">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_4">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_5">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_6">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_7">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_8">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                </div>
                <div class="control-group">
                    <select name="harvard_name_9">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                    
                </div>
                
                <div class="control-group">
                    <select name="harvard_name_10">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= ". $row . ">" . $row . "</option>");
                        ?>
                    </select>
                    
                </div>
                <div class="control-group">
                    <select name="harvard_name_11">
                        <option value=""></option>
                        <?php
                            foreach($players as $row)
                                print("<option value= " . $row . ">" . $row . "</option>");
                        ?>
                    </select>
                    
                </div>

                <div class="control-group">
                    <input class="input-medium" name="opposition" placeholder="Opposition Team Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player1" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player2" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player3" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player4" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player5" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player6" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player7" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player8" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player9" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player10" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <input class="input-medium" name="player11" placeholder="Player Name" type="text"/>
                </div>
                <div class="control-group">
                    <button type="submit" class="btn">Make Scorecard</button>
                </div>
            
            </fieldset>
            </form>
        </div>

        </div>

    </div>

    </body>
</html>
