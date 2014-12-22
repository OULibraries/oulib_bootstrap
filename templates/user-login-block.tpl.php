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

<div class="panel-pane pane-block pane-menu-menu-quick-links">
<div id="user-login-block-container">
  <div id="user-login-block-form-fields">
    <?php print $name; // Display username field ?>
    <?php print $pass; // Display Password field ?>
    <?php print $submit; // Display submit button ?>
    <!--<?php print $links; // Display links ?>-->
    <?php print $rendered; // Display hidden elements (required for successful login) ?> 
  </div>
</div>
</div>