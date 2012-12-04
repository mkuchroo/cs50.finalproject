<html>

<ul class="nav nav-pills">

    <li><a href="insert_player.php">Insert Player</a></li>
    <li><a href="insert_teams_scorecard.php">Insert Scorecard</a></li>
    <li><a href="insert_article.php">Insert Article</a></li>
</ul>

<body>
<form action="insert_player.php" method="post">
    <fieldset>
        <div class="control-group">
            <input class="input-medium" name="name" placeholder="Full Name" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="games" placeholder="Games" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="bat_runs" placeholder="Runs Scored" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="bat_balls" placeholder="Balls Faced" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="50s" placeholder="50s" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="100s" placeholder="100s" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="4s" placeholder="4s" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="6s" placeholder="6s" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="bowl_overs" placeholder="Overs Bowled" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="bowl_runs" placeholder="Runs Against" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="bowl_wicket" placeholder="Wickets Taken" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="bat_style" placeholder="Batting Style" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="bowl_style" placeholder="Bowling Style" type="text"/>
        </div>
        <div class="control-group">
            <input class="input-small" name="affiliation" placeholder="Harvard Affiliation" type="text"/>
        </div>
        <div class="control-group">
            <button type="submit" class="btn">Create</button>
        </div>
    </fieldset>
</form>

        </div>

    </body>

</html>
