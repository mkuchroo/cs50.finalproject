
<?php

//including required php files    
   require("../includes/config.php"); 

//printing our template
    render("../templates/insert_photo_template.php");
    
//check for proper usage
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        if (empty($_POST["image"]))
            apologize("Sorry! You must submit a photo!");

//if used properly, insert photo into phpMyAdmin
    else
    {
        query("INSERT INTO `gallery` (`image`) VALUES (?)", $_POST["image"]);
        redirect("/homepage_login.php");
    }
?>
