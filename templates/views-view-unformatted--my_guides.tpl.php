<div id="views-unformatted-<?php print $id ?>" class="<?php print $classes ?> ">
	 <?php  foreach ($rows as $key => $row):  ?>
	 
      <div class="row" style="border-top:1px dashed #cccccc; padding:5px;">
	  <div>
	  
	  </div>
		<div class="col-md-1 col-sm-1 col-xs-3">
			<?php print_r($view->style_plugin->get_field($key, 'ops_1')); ?>
			
		</div>
		
		<div class="col-md-1 col-sm-1 col-xs-3">
            <?php print flag_create_link('my_library', $view->style_plugin->get_field($key, "nid")); ?>
        </div>
	  
		<div class="col-md-10 col-sm-10 col-xs-6">
            <a href="<?php print $db_url; ?>" target="_blank" rel="nofollow"><?php print $view->style_plugin->get_field($key, "field_link_2") ?></a>  
		</div>
			
		
		
	  </div>
             
	<?php endforeach ?>
        
</div>
