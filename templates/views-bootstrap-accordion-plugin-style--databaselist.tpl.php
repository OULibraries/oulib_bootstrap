<div id="views-bootstrap-accordion-<?php print $id ?>" class="<?php print $classes ?> databaselist">
  <?php foreach ($rows as $key => $row): ?>
   <div class="panel panel-default">
		
			  <div class="row database_title" style="padding:10px 10px 5px 10px; border-bottom:1px solid #cccccc;">
					<div class="col-md-10"><h4><?php print $view->style_plugin->get_field($key, "field_link_2"); ?></h4> <p><?php print $view->style_plugin->get_field($key, "field_coverage"); ?></p></div>
					<div class="col-md-2"><h5><a href="<?php print $view->style_plugin->get_field($key, "field_link_1"); ?>" target="_blank">Access<span class="glyphicon glyphicon-new-window"></span></a></h5></div>
			  </div>
			  <div class="row" style="padding:5px 10px 10px 10px;">
				<div class="col-md-12"><?php print $view->style_plugin->get_field($key, "field_description"); ?></div>
				</div>
		
      <div class="panel-heading">
        <h4 class="panel-title">
		     <a class="accordion-toggle"
             data-toggle="collapse"
             data-parent="#views-bootstrap-accordion-<?php print $id ?>"
             href="#collapse<?php print $key ?>">
            <span class="caret"></span> <?php print $titles[$key] ?>
          </a>
          
        </h4>
      </div>

      <div id="collapse<?php print $key ?>" class="panel-collapse collapse">
        <div class="panel-body">
          <?php print $row ?>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
