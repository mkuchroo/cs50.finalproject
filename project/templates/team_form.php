<!DOCTYPE html>

    <head>
    </head>
    <body>
<form action="team.php" method="post">
    <fieldset>
        <div class="control-group">
            <select name="symbol">
            <option value = "name">Choose a Player</option>
            <?
            foreach ($names as $name)
            {
                echo '<option value = "'.$name["name"].'">'.$name["name"].'</option>';
            }
            ?>
            </select>
        </div>
        <div class="control-group">
            <button type="submit" class="btn">Look Up</button>
        </div>
    </body>
    
</html>
