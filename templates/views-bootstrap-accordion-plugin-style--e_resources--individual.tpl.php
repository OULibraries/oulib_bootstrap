<div id="views-bootstrap-accordion-<?php print $id ?>" class="<?php print $classes ?> databaselist">
  <?php  foreach ($rows as $key => $row):
            include 'views-ezproxy_url.inc';
  ?>
   <div class="panel panel-default">
		
			  <div class="row database_title" style="padding:10px 10px 5px 10px; border-bottom:1px solid #cccccc;">
					<div class="col-md-10">
						<h4 class="eref <?php print $access_class ?>"><a href="<?php print $db_url; ?>" target="_blank"><?php print $view->style_plugin->get_field($key, "field_link_1"); ?> <span class="glyphicon glyphicon-new-window"></span></a></h4> 
						
						<p>Coverage includes <?php print $view->style_plugin->get_field($key, "field_coverage"); ?> </p> 
					</div>
					<div class="col-md-2"><br><?php print $view->style_plugin->get_field($key, "ops"); ?></div>
			  </div>
			  <div class="row" style="padding:5px 10px 10px 10px;">
				
				<div class="col-md-12">
					<br>
					<p><?php print $view->style_plugin->get_field($key, "field_description"); ?> </p>
					<p>&nbsp;</p>
					<p><Strong>Related Subjects:</strong> <?php print $view->style_plugin->get_field($key, "field_subjects"); ?></p> 
					<p><strong>Permalink:</strong> <?php print $db_url; ?></p> 
					<?php print $view->style_plugin->get_field($key, "field_endnote"); ?></div>
				<div class="col-md-12">
					<hr>
					<h4>More Information</h4>
					<p><?php print $view->style_plugin->get_field($key, "field_info"); ?></p> 
				</div>
				
				<div class="col-md-12"><div class="resourcetype"><?php print $view->style_plugin->get_field($key, "field_resourcetype"); ?>
				</div></div>
				</div>
		
      

      <div id="collapse<?php print $key ?>" class="panel-collapse collapse">
        <div class="panel-body">
          <?php print $view->style_plugin->get_field($key, "field_info"); ?><br /><br />
		  <Strong>Related Subjects:</strong> <?php print $view->style_plugin->get_field($key, "field_subjects"); ?><br />
		  <strong>Permalink:</strong> <?php print $db_url; ?><br />
		  <?php print $view->style_plugin->get_field($key, "field_endnote"); ?>
		  
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
