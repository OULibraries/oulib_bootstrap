<div id="views-unformatted-<?php print $id ?>" class="<?php print $classes ?> ">
	<?php  foreach ($rows as $key => $row): 
            include 'views-ezproxy_url.inc';
			?>
      <div class="row">
	  <div>
	  
	  </div>
		<div class="col-md-1 col-sm-1 col-xs-3">
			<?php print_r($view->style_plugin->get_field($key, 'ops_1')); ?>
			
		</div>
	  
		<div class="col-md-8 col-sm-8 col-xs-9">
            <a href="<?php print $db_url; ?>" target="_blank" rel="nofollow"><?php print $view->style_plugin->get_field($key, "field_link_2") ?></a>  
		</div>
			
		<div class="col-md-3 col-sm-3 col-xs-12">
            <?php print flag_create_link('my_library', $view->style_plugin->get_field($key, "nid")); ?>
        </div>
		
	  </div>
             
	<?php endforeach ?>
        
</div>
