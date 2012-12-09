<div class="container-fluid">
<div class="row-fluid">
<!-- display news on right side-->
<div class="span4">
  <font size = '8'>news</font>
  <br/>
  <br/>
  <!-- iterate through all news articles stored in phpMyAdmin -->
  <?
      for ($i = 0; $i < $length; $i++)
      {
            echo "<a href='" . $news[$i]['url']."'>".$news[$i]['header']."</a>";
            echo "<br/><br/>";
      }
   ?>
</div>
<!-- display slideshow on left side-->
<div class="span8">
    <img name="foto" width = "400" height = "200" class = 'img-polaroid'>
    <script>
    update();
    </script>

</div>
</div>
</div>

