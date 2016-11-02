<?php
?>

<?php
// we don't want the comments
hide($content['comments']);
$i = 0;
?>

<?php
// loop through each returned value in content and show it if it should
// be visible
foreach ($content as $key => $value) {
  $i++;
  // checking and showing step title
  if (array_key_exists('field_step_title' . $i, $content)) { ?>
    <div class="ac_container">
	<div class="col-md-12 ac_header">
    <h2><?php print render($content['field_step_title' . $i]); ?></h2>
    <?php
  }
  // checking and showing the field percentage
if (array_key_exists('field_percentage' . $i, $content)) { ?>
  <p><?php print render($content['field_percentage' . $i]);
}
  // checking and showing the due date...but only if it has a real date
  if (array_key_exists('field_date_complete' . $i, $content) &&
    ($content['field_date_complete' . $i][0]['#markup'] != '-') &&
    ($content['field_date_complete' . $i][0]['#markup'] != '12-31-1969') &&
    ($content['field_date_complete' . $i][0]['#markup'] != '<div>12-31-1969</div>')
  ) {
    print render($content['field_date_complete' . $i]);
  } ?>
  </p></div>
  <?php
  // checking and showing the resources
  if (array_key_exists('field_resources' . $i, $content)) {
    ?>
    <div class="col-md-12"><?php print render($content['field_resources' . $i]); ?></div>
	</div>
	

    <?php
  }
}