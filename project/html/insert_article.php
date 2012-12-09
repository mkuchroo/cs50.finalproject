
<?php

//including required php files    
   require("../includes/config.php"); 

//printing our template
    render("../templates/insert_article_text.php");
    
//check for proper usage
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        if (empty($_POST["header"]) || empty($_POST["url"]))
            apologize("Sorry! You must submit a URL and a Title!");
            
//if used properly, insert article into phpMyAdminn
    else
    {
        query("INSERT INTO `articles` (`url`, `header`) VALUES (?,?)", $_POST["url"], $_POST["header"]);
        redirect("/homepage_login.php");
    }
?>
