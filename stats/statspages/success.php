<?php 
$total = 0;
if(isset($details['SUCCESS'])) $total+= $details['SUCCESS'];
if(isset($details['FAIL'])) $total+= $details['FAIL'];

$sW = 0;
$fW = 0;

if(isset($details['SUCCESS'])) {
  $sW = ($details['SUCCESS']/$total) * 100;
}
if(isset($details['FAIL'])) {
  $fW = ($details['FAIL']/$total) * 100;
}
?>

<div class="progress">
  <?php if(isset($details['SUCCESS'])) :?>
  <div class="progress-bar progress-bar-success" style="width: <?php echo $sW;?>%">
    <?php echo $details['SUCCESS'];?> success
  </div>
  <?php endif;?>

  <?php if(isset($details['FAIL'])) : ?>
  <div class="progress-bar progress-bar-danger" style="width: <?php echo $fW;?>%">
  <?php echo $details['FAIL'];?> failure
  </div>
  <?php endif;?>
</div>