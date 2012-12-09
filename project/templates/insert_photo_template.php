<!--create template to insert path of photo -->
<form action="insert_photo.php" method="post">
    <fieldset>

    <div id="top">
        Enter the Path of the Photo
        <br/>
        (i.e. ../img/photo.jpg)
        <br/>
        <br/>
    </div>

    <div id="middle">
        
        <div class="control-group">
            <input class="input-medium" name="image" placeholder="Path of Photo" type="text"/>
        </div>
        
        <div class="control-group">
            <button type="submit" class="btn">Upload Photo</button>
        </div>
     </div>
    </fieldset>
    </form>
