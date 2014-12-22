<?php
/**
 * You can override this template globally, or for specific regions.
 * user-login-block--REGION-NAME.tpl.php will work for specific instances of the block,
 * while this one will work when it's displayed inside of a panel.
 *
 * Note that region-specific override templates MUST live in the theme's directory,
 * not in the module's directory, to be detected.
 */
?>
<div id="">
  <div id="" class="">
<div class="row user-login" style="margin-top:-28px;">
	<div class="col-md-1 col-md-offset-2">
		<span style="color:#ffffff; font-size:10px;"><?php print $name; // Display username field ?></span>	
	</div>
	
	<div class="col-md-1">
		<span style="color:#ffffff; font-size:10px;"><?php print $pass; // Display Password field ?></span>	
	</div>

	<div class="col-md-1" style="padding-top:8px;">
		<?php print $submit; // Display submit button ?>
	</div>
	
   <!-- <?php print $links; // Display links ?>  -->
    <?php print $rendered; // Display hidden elements (required for successful login) ?> 
	
</div>
  </div>
</div>