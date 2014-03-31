<?php
/**
 * @file
 */

/**
 * Rewrites author and date information.
 *
 * Implements hook_preprocess_node().
 */
function sport_preprocess_node(&$variables) {
  $variables['submitted'] = t('!datetime | <em>af !username</em>',
    array(
      '!username' => $variables['name'],
      '!datetime' => strtolower(format_date($variables['created'], 'custom', 'l, j. F Y')),
    ));
}

/**
 * Implements hook_css_alter().
 */
function sport_css_alter(&$css) {
  // Remove Panopoly Images CSS as it messes up the layout.
  unset($css[drupal_get_path('module', 'panopoly_images') . '/panopoly-images.css']);
  unset($css[drupal_get_path('module', 'vih_images') . '/vih-images.css']);
}

/**
 * Implements hook_breadcrumb()
 */
function sport_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($variables['breadcrumb'])) {
    $breadcrumb[] = drupal_get_title();
    $output = '<h2 class="element-invisible">'.t('You are here').'</h2>';
    $output .= '<div class="breadcrumb">'.implode(' ~ ', $breadcrumb).'</div>';
    return $output;
  }
}

/**
 * Implements hook_menu_local_task()
 */
function sport_menu_local_task($variables) {
  $link = $variables['element']['#link'];
  $link['localized_options']['html'] = TRUE;
  return '<li>'.l($link['title'], $link['href'], $link['localized_options']).'</li>'."\n";
}

/**
 * Implements hook_menu_local_tasks()
 */
function sport_menu_local_tasks(&$variables) {
  $output = '';
  $has_access = user_access('access contextual links');
  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
   
    // Only display contextual links if the user has the correct permissions enabled.
    // Otherwise, the default primary tabs will be used.   
    $variables['primary']['#prefix'] = ($has_access) ?
      '<div class="contextual-links-wrapper"><ul class="contextual-links">' : '<ul class="tabs primary">';

    $variables['primary']['#suffix'] = ($has_access) ?
      '</ul></div>' : '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] = '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}
