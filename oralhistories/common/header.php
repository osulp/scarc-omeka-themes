<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>">
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_url('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');
    queue_css_file('normalize');
    queue_css_file('style');
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr'); ?>
    <?php queue_js_file('jquery-extra-selectors'); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
		<?php queue_js_file('googleanalytics'); ?>
    <?php echo head_js(); ?>
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div id="wrap">
        <header>
            <div id="site-title">
				<?php echo '<a href="/omeka/exhibits/show/' . metadata('exhibit', 'slug') . '/main/">' . theme_logo() . '</a>'; ?>
            </div>
<!--
            <div id="search-container">
-->
                <?#php echo search_form(array('show_advanced' => true)); ?>
<!--
            </div>
-->
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
        </header>

<!--
        <nav class="top">
-->
            <?#php echo public_nav_main(); ?>
<!--
        </nav>
-->

        <div id="content">
<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
