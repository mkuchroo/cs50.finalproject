<!DOCTYPE html>
    <head>
    </head>
    <body>
    <table, class = "table">
    <thead>
        <tr>
        Gallery
        <br/>
        </tr>
    </thead>
    <br/>
    <tbody>
    <?
        for ($i = 0; $i< $length; $i++)
        {
        print("<tr>");
        echo "<a href=" . $gallery[$i]['image']."><img src =" . $gallery[$i]['image'] . " width = '200' height = '100'>"."</a>";
        print("</tr>");
        }
    ?>
    </tbody>
    </table>
    <!--table, class = "table">
    <thead>
        <tr>
        Gallery
        </tr>
    </thead>
    <br/>
    <tbody>
    <?
        for ($i = 0; $i< $length; $i++)
        {
        print("<tr>");
        echo "<a href=" . $gallery[$i]['image']."><img src =" . $gallery[$i]['image'] . " width = '200' height = '100'>"."</a>";
        print("</tr>");
        }
    ?>

    </tbody>   
    </table-->    
    </body>
    </html>
