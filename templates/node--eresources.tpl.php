<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="row">
<?php
    // See if this resource is set to be proxied
    $proxy = $content['field_proxy']['#access'];
    $db_url;
    // If so, get the configuration from the ezproxy module and set the URL prefix
    if ($proxy == '1') {
      $proxy_host = variable_get('ezproxy_host', 'http://ezproxy.example.com');
      $proxy_port = variable_get('ezproxy_port', '2048');
      // Don't specifiy port if it's standard http/https
      if (($proxy_port == '80') || ($proxy_port == '443') || !(is_numeric($proxy_port)) ) {
        $proxy_port = NULL;
      // Otherwise set the string to :port
      } else {
        $proxy_port = ':' . $proxy_port;
      }
      // Set the prefix and add it the url
      $proxy_prefix = "$proxy_host" . "$proxy_port" . '/login?url=';
      $db_url = $proxy_prefix . $content['field_link']['0']['#element']['display_url'];
    // If the resource isn't set to be proxied, kill the prefix and do the bare url
    } else {
        $db_url = $content['field_link']['0']['#element']['display_url'];   
    }
 ?>
		<div class="col-md-8"> <h1><a href="<?php print $db_url; ?>"><?php print $title; ?></a></h1>
		<?php print render($content['field_coverage']); ?>
							
	<p><?php print render($content['field_description']); ?></p>
	<strong>Permalink:</strong><?php print $db_url; ?></div>
	
	
	
	<div class="col-md-4 news">
	<h2>Subjects</h2>
	<?php print render($content['field_subjects']); ?>
	<hr style="width:90%">
	<h2>More Info</h2>
		<?php print render($content['field_info']); ?>
		<?php print render($content['field_hsc']); ?>		
		<?php print render($content['field_endnote']); ?></div>
  </div>
  <div class="row">
	<div class="col-md-12">
	
		
		
		
	</div>
  </div>
 </div>
  


  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
	  hide($content['field_link']);
	  hide($content['field_proxy']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
