<?php
$db_url =""; // proxied link to url with ou proxy

$proxy="";
$access_class="access_open";

try {
  // See if this resource is set to be proxied
  $proxy_arr = $view->style_plugin->get_field_value($key, "field_proxy");
  $proxy = $proxy_arr[0]["value"];

} catch ( Exception $e) {
  watchdog('ezproxy template error','view missing proxy field when trying to do ezy proxy display');
}

// If the resource should be proxied and proxying is enabled, get the
// configuration from the ezproxy module and set the URL prefix
if ($proxy == 1 && module_exists("ezproxy") ) {
  $access_class="access_closed";
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