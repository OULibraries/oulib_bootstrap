<?php

/**
 * @file
 * template.php
 
 */
 
 
/**
* Implements hook_preprocess_html().
*/
function oulib_bootstrap_preprocess_html (&$vars) {
  
  $data = array(
     '#tag' => 'meta',
     '#attributes' => array(
       'http-equiv' => "X-UA-Compatible",
       'content' => "IE=edge",
       )
     );

   drupal_add_html_head($data,'key');

  drupal_add_library('system', 'ui');
   
 }

function oulib_bootstrap_admin_paths_alter(&$paths) {
    // Treat all user pages as not administrative.
    $paths['user/*'] = FALSE;
}
