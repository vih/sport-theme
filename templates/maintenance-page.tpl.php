<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="outer" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div id="highlighted">
      <?php print render($page['highlighted']); ?>
    </div>
    <div id="inner">  
      <div id="header">
        <div id="hd">
          <h2><a href="<?php print $front_page; ?>"><span><?php print $site_name; ?></span></a></h2>
        </div>
      </div>
      <div id="main">
        <div id="col1">
          <div class="inner">
            <?php print render($page['sidebar_first']); ?>
          </div>
        </div>
        <div id="content-main">
          <div class="inner">
            <div class="contextual-links-region">
              <div class="element-invisible"></div>
              <?php print render($title_prefix); ?>
              <?php if ($title): ?><h1 class="title" id="page-title"><span><?php print $title; ?></span></h1><?php endif; ?>
              <?php print render($title_suffix); ?>
              <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
              <?php if ($messages): ?><div id="console" class="clearfix"><?php print $messages; ?></div><?php endif; ?>
              <?php print render($page['help']); ?>
              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
              <?php print render($page['content']); ?>
            </div>
          </div>
        </div>
        <div id="col3">
          <div class="inner">
            <?php print render($page['sidebar_second']); ?>
          </div>
        </div>
      </div>
      <div id="footer">
        <div class="inner">
          <div id="footer-first">
            <?php print render($page['footer_first']); ?> 
          </div>
          <div id="footer-second">
            <?php print render($page['footer_second']); ?>                 
          </div>
          <div id="breadcrumb">
            <?php print $breadcrumb; ?>
          </div>
        </div>
      </div>
      <div id="prop"></div>
      <div id="prop2"></div>
    </div>
  </div>

</body>
</html>

