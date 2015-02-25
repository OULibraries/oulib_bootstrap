<?php
    // See if this resource is set to be proxied
    $proxy = $view->style_plugin->get_field($key, "field_proxy");
    $db_url;
    // If so, get the configuration from the ezproxy module and set the URL prefix
    if ($proxy == 1) {
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
      $db_url = $proxy_prefix . $view->style_plugin->get_field($key, "field_link");
    // If the resource isn't set to be proxied, kill the prefix and do the bare url
    } else {
        $db_url = $view->style_plugin->get_field($key, "field_link");   
    }
 ?>