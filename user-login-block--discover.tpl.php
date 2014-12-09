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
<div id="user-login-block-container">
  <div id="user-login-block-form-fields">
<div class="row">
	<div class="col-md-3">
		<?php print $name; // Display username field ?>
	</div>
	
	<div class="col-md-3">
		<?php print $pass; // Display Password field ?>
	</div>

	<div class="col-md-3" style="padding-top:25px;">
		<?php print $submit; // Display submit button ?>
	</div>
	
   <!-- <?php print $links; // Display links ?>  -->
    <?php print $rendered; // Display hidden elements (required for successful login) ?> 
	
</div>
  </div>
</div>