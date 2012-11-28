
<?php

//including required php files    
   require("../includes/config.php"); 

//printing our template
    render("../templates/homepage_login_text.php");

//checking for user input
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        redirect("insert_player.php");
    }
?>
