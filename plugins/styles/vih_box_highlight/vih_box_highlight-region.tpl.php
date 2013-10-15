<?php
drupal_add_css(drupal_get_path('module','vih_styles') .'/plugins/styles/vih_box_highlight/vih_box_highlight.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE)); ?>
<div class="vih-box-highlight-region">
<?php print render($content->content); ?>
</div>
