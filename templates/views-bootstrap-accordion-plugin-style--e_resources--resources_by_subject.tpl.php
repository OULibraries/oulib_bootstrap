<div id="views-bootstrap-accordion-<?php print $id ?>" class="<?php print $classes ?> databaselist">
  <?php  foreach ($rows as $key => $row):
            include 'views-ezproxy_url.inc';
  ?>
   <div class="panel panel-default">
		
			  <div class="row database_title" style="padding:10px 10px 5px 10px; border-bottom:1px solid #cccccc;">
					<div class="col-md-10"><h4 class="eref"><a href="<?php print $db_url; ?>" target="_blank"><?php print $view->style_plugin->get_field($key, "field_link_1"); ?> <span class="glyphicon glyphicon-new-window"></span></a></h4> <p> <?php print $view->style_plugin->get_field($key, "field_coverage"); ?> </p></div>
					<!--<div class="col-md-2"><?php print $view->style_plugin->get_field($key, "ops"); ?></div>-->
			  </div>
			  <div class="row" style="padding:5px 10px 10px 10px;">
				<div class="col-md-12"><?php print $view->style_plugin->get_field($key, "field_description"); ?></div>
				</div>
		
     
		  
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
