
<!DOCTYPE html>
    <!--body>
        <img src="../img/team_pic.gif" alt="some_text">
    </body-->
    <head>

    </head>
    <body>
        <script>
            var interval = 3000;
            var random_display = 1;
            var imageDir = "../img/";
            var imageNum = 0;
            imageArray = new Array();
            imageArray[imageNum++] = new imageItem(imageDir + construction.gif);
            imageArray[imageNum++] = new imageItem(imageDir + logo.gif);
            imageArray[imageNum++] = new imageItem(imageDir + team_pic.gif);  
            var totalImages = imageArray.length;
            
            function randNum(x,y)
            {
                var range = y - x + 1;
                return Math.floor(Math.random()*range) + x;
            }
            
            function getNextImages()
            {
                if (random_display)
                {
                    imageNum = randNum(0, totalImages-1);
                }
                else
                {
                    imageNum = (imageNum + 1) % totalImages;
                }
            }
            
        </script>
    </body>
    
</html>

