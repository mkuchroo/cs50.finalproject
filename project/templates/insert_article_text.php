<!--create form to insert article headers and urls-->
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
            <button type="submit" class="btn">Insert Article</button>
        </div>
     </div>
    </fieldset>
    </form>
