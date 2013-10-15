<?php
/**
 * @file
 */

/**
 * Implementation of hook_panels_styles().
 */
$plugin =  array(
  'vih_box_highlight' => array(
    'title' => t('Highlight box on page'),
    'description'   => t('Highlight a box on the page'),
    'render pane' => 'vih_box_highlight_render_pane',
    'render region' => 'vih_box_highlight_render_region',
    // 'pane settings form' => 'vih_box_highlight_settings_form',
    'hook theme'    => array(
      'vih_box_highlight_theme_pane' => array(
        'template' => 'vih_box_highlight-pane',
         'path' => drupal_get_path('theme', 'sport') .'/plugins/styles/vih_box_highlight',
         'variables' => array(
           'content' => NULL,
           'settings' => NULL,
         ),
       ),
      'vih_box_highlight_theme_region' => array(
        'template' => 'vih_box_highlight-region',
         'path' => drupal_get_path('theme', 'sport') .'/plugins/styles/vih_box_highlight',
         'variables' => array(
           'content' => NULL,
         ),
       ),
    ),
  ),
);
 
function theme_vih_box_highlight_render_pane($vars) {
  $settings = $vars['settings'];
  $content = $vars['content'];
  return theme('vih_box_highlight_theme_pane', array('content' => $content, 'settings' => $settings));
}

function theme_vih_box_highlight_render_region($vars) {
  $content = '';
 
  foreach ($vars['panes'] as $pane_id => $pane_output) {
    $content .= $pane_output;
  }
  if (empty($content)) {
    return;
  } 
  return theme('vih_box_highlight_theme_region', array('content' => $content));
}
/*
function vih_box_highlight_settings_form($style_settings) {
  $form['top_color'] = array(
    '#type' => 'select',
    '#title' => t('Top color'),
    '#options' => array(
      'blue' => t('Blue'),
      'green' => t('Green'),
    ),
    '#default_value' => (isset($style_settings['top_color'])) ? $style_settings['top_color'] : 'blue',
  );
 
  return $form;
}
*/
