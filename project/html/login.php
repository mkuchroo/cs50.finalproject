<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        // if we found user, check password
        //if (count($rows) == 0) GETTING ERROR HERE WHEN USERNAME AND PASSWORD NOT CORRECT, HELP!
        {
            // first (and only) row
            $row = $rows[0];
          //  

            // compare hash of user's input against hash that's in database
           // if (crypt($_POST["password"], $row["hash"]) == $row["hash"])
            if ($_POST["username"] == $row["username"] && $_POST["password"] == $row["hash"])
            {
              //  dump($row);
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                // redirect to portfolio
                redirect("index.php");
            }
            else
                apologize("Sorry, username and password not registered");
        }
     }
    else
    {
        // else render form
        render("login_form.php");
    }

?>
