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
  if ($vars['is_front']) {
    $options = array('type' => 'file');
    drupal_add_js(drupal_get_path('theme', 'oulib_bootstrap') . '/js/bootstrap-tabcollapse.js', $options);
    drupal_add_js(drupal_get_path('theme', 'oulib_bootstrap') . '/js/front.js', $options);
  }
 }

 
 

