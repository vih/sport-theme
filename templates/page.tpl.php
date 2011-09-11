<div id="outer" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="top">
        <?php print render($page['highlighted']); ?>
    </div>
    <div id="header">
        <div id="hd">
           <h1><a href="<?php print $front_page; ?>"><span><?php print $site_name; ?></span></a></h1>
        </div>
    </div>
    <div id="inner">
        <div id="main">
            <div class="vihcontent">
                <div class="clearfix picholder">
                    <div id="col1">
                        <?php print render($page['sidebar_first']); ?>
                    </div>

                    <div id="content-main">
                        <div class="fit contextual-links-region">
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
                    <div id="col3">
                        <div class="col3inner">
                        <?php print render($page['sidebar_second']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer" class="clearfix">
            <div id="footer-inner">
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
    </div>
    <div id="prop"></div>
    <div id="prop2"></div>
    <div id="base"></div>
</div>
