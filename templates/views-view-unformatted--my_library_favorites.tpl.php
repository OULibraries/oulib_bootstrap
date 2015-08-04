<div id="views-unformatted-<?php print $id ?>" class="<?php print $classes ?> ">
	<?php  foreach ($rows as $key => $row): 
            include 'views-ezproxy_url.inc';
			?>
      <div class="row">
		<li><a href="<?php print $db_url; ?>" target="_blank" rel="nofollow"><?php print $view->style_plugin->get_field($key, "field_link_1") ?></a> </li>
	  </div>
             
	<?php endforeach ?>
        
</div>
