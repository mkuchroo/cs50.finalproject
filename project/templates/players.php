<!--print player and number -->
<font size = "14">#<?echo$player[0]['id']?>: </font>
<font size = "14"><?print("$name")?></font>
<br/>
<br/>

<!--print photo of player -->
<div class="row">
  <div class="span3 offset3">
    <img src = "<?echo$player[0]['image']?>" class = "img-polaroid">
  </div>
  
<!--display batting/bowling styles and description --> 
<div class="span4">
  <br/>
  <br/>
  Batting Style: <?echo$player[0]['bat_style']?>
  <br/>
  Bowling Style: <?echo$player[0]['bowl_style']?>
  <br/>
  Affiliation: <?echo$player[0]['description']?>
  </div>
</div>

<!--create table with statistics -->
<div class="container">
    <div id="middle">

<table class="table table-striped">

    <thead>
        <tr>
            <th>Batting</th>
            <th></th>
            <th>Bowling</th>
            <th></th>

        </tr>
    </thead>

    <tbody>
    <tr>
    <tr>
        <td>Games:</td>
        <td><?echo$player[0]['games']?></td>
        <td>Overs:</td>
        <td><?echo$player[0]['bowl_overs']?></td>
    </tr>
    <tr>
        <td>Runs:</td>
        <td><?echo$player[0]['bat_runs']?></td>
        <td>Runs:</td>
        <td><?echo$player[0]['bowl_runs']?></td>
    </tr>
    <tr>
        <td>Balls:</td>
        <td><?echo$player[0]['bat_balls']?></td>
        <td>Wickits:</td>
        <td><?echo$player[0]['bowl_wicket']?></td>
    </tr>
    <tr>
        <td>50s:</td>
        <td><?echo$player[0]['50s']?></td>
        <td>Average:</td>
        <td>CALCULATE AVERAGE</td>
    </tr>
    <tr>
        <td>100s:</td>
        <td><?echo$player[0]['100s']?></td>
        <td>Strike Rate:</td>
        <td>CALCULATE STRIKE RATE</td>
    </tr>
    <tr>
        <td>Average:</td>
        <td>CALCULATE AVERAGE</td>
        <td>Economy:</td>
        <td>CALCULATE ECONOMY</td>
    </tr>
    <tr>
        <td>Strike Rate:</td>
        <td>CALCULATE STRIKE RATE</td>
    </tr>
    <tr>
        <td>4s:</td>
        <td><?echo$player[0]['4s']?></td>
    </tr>
    <tr>
        <td>6s:</td>
        <td><?echo$player[0]['6s']?></td>
    </tr>
    </tr>

    </table>

</div>

</div>

