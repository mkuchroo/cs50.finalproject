<!--display gallery -->
<ul class = "thumbnails">
<font size = "14">Gallery</font>
<br/>
<br/>
<!--iterate through all photos in gallery -->
<?
for ($i = 0; $i< $length; $i++)
{
    print("<li class = 'span4'>");
    echo "<a href='" . $gallery[$i]['image']."'class='thumbnail'> ";
    echo "<img src='" . $gallery[$i]['image']."'alt=''>";
    print("</a>");
    print("</li>");
}
?>
</ul>


    
    
    


