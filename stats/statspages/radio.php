<ul class="list-inline">
<li><strong>Total</strong> - <?php echo array_sum($radio);?></li>
<?php foreach($radio as $channel => $num):?>
  <li><strong><?php echo $channel;?></strong> - <?php echo $num;?></li>
<?php endforeach;?>
</ul>

<style>
.radio-COM {background-color: #008000;}
.radio-SCI {background-color: #993399;}
.radio-HEA {background-color: #193a7a;}
.radio-SEC {background-color: #a30000;}
.radio-MED {background-color: #337296;}
.radio-ENG {background-color: #fb5613;}
.radio-CAR {background-color: #a8732b;}
.radio-SRV {background-color: #6eaa2c;}
.radio-SYN {background-color: #6d3f40;}
.radio-DEA {background-color: #686868;}
.radio-OTH {background-color: #ff00ff;}
.radio-PDA {background-color: #000000;}
.radio-RC  {background-color: #00FFFF;}
</style>
  <div class="progress">
  <?php
  array_pop($radio);
  foreach ($radio as $channel => $num) {
    $pct = 0;
    if ($num) $pct = ($num/array_sum($radio))*100;
    echo '<div class="progress-bar radio-'.$channel.'" style="width: '.$pct.'%;">
    <span>'.$channel.'-'.$num.'</span></div>';
  }
  ?>
  </div>
