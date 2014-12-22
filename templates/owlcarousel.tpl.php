<?php
/**
 * @file
 * Default carousel output.
*/
?>
<div style="background-color:#f2f2f2;">
<div id="<?php print $settings['attributes']['id']; ?>" class="owl-carousel">
  <?php print theme('owlcarousel_list', array('items' => $items, 'settings' => $settings)); ?>
</div>
</div>
