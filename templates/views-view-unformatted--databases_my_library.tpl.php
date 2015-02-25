<div id="views-unformatted-<?php print $id ?>" class="<?php print $classes ?> databses-my-library">
      <div class="view-content">
      <table class="views-table cols-0 table">
       <tbody>
  <?php  foreach ($rows as $key => $row): 
            include 'views-ezproxy_url.inc';
  ?>
          <tr class="odd views-row-first views-row-last">
                  <td class="views-field views-field-field-link views-align-left">
            <a href="<?php print $db_url; ?>" target="_blank" rel="nofollow"><?php print $view->style_plugin->get_field($key, "field_link_1") ?></a>          </td>
                  <td class="views-field views-field-ops views-align-right">
                  <?php print flag_create_link('my_library', $view->style_plugin->get_field($key, "nid")); ?>
          </td>
              </tr>
  <?php endforeach ?>
      </tbody>
</table>
    </div>
</div>
