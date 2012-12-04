<!DOCTYPE html>


<html>
    <body>

<ul class="nav nav-pills">

    <li><a href="insert_player.php">Insert Player</a></li>
    <li><a href="insert_teams_scorecard.php">Insert Scorecard</a></li>
    <li><a href="insert_article.php">Insert Article</a></li>

</ul>
    <body>

        <form action="insert_article.php" method="post">
            <fieldset>

            <div id="top">
                Enter Article
            </div>

            <div id="middle">
                <div class="control-group">
                    <input class="input-medium" name="header" placeholder="Text Header" type="text"/>
                </div>
                
                <div class="control-group">
                    <input class="input-medium" name="url" placeholder="URL of Article" type="text"/>
                </div>
                
                <div class="control-group">
                    <button type="submit" class="btn">Make Scorecard</button>
                </div>
             </div>
            </fieldset>
            </form>
    </body>
</html>
