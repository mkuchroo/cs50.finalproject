<?php

    // configuration
    require("../includes/config.php"); 

    //get article names and links
    $news = query("SELECT id, url, header FROM articles");
    
    //define number of articles
    $length = count($news);
    
    // render homepage
    render("homepage.php", ["title" => "Harvard Cricket", "news" => $news, "length" => $length]);

?>
