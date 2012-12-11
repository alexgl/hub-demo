<?php

function hub_garland_menu_link(array $variables) {
  global $base_path;    
  $element = $variables['element'];
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);

  if($element['#title'] == 'Home') {
    $element['#localized_options']['html'] = TRUE;
    $get = '<img src="' . $base_path . drupal_get_path('theme', 'hub_garland') . '/images/hub_home.png" style="vertical-align: middle;" alt="' . $element['#title'] . '" title="' . $element['#title'] . '" />';
    drupal_debug($get,'theget');
    $output1 = l($get,$element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' .$output1    . "</li>\n";   
  } else {
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
  }
}

