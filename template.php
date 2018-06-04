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

 function oulib_bootstrap_theme($existing, $type, $theme, $path) {
  $items = array();
  'user_profile_form' = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'oulib_bootstrap') . '/templates',
  'template' => 'user-profile-form',
  )
 );
return $items;
}
 

