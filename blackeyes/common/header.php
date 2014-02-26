<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo strip_formatting($title) . ' | ' . option('site_title');  ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    queue_css_file('skeleton');

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div id="wrap">

        <div id="header">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

	<!--
            <div id="site-title"><?php // echo link_to_home_page(theme_logo()); ?></div>
-->	

<!--
			<h1><?php // echo metadata('exhibit', 'title'); ?></h1>
-->


<?php

// If this is the homepage, display the title image, otherwise the header image
	// trim following slash off current URL for comparison sake

if (rtrim(current_url(), "/") == exhibit_builder_exhibit_uri()) {
	echo '<a href="' . exhibit_builder_exhibit_uri() . '/about/about">';
	echo '<img src="' . html_escape(url('themes/blackeyes/images/title.jpg')) . '"  alt="Title Image. ' . metadata('exhibit', 'title') . '" title="' . metadata('exhibit', 'title') . '"/></a>';
}
?>


        </div>

<!--
           <div id="primary-nav">
               <?php
                    // echo public_nav_main();
               ?>
           </div>
-->
                       <?php // echo theme_header_image(); ?>



<div id="sidebar">

<?php

// If this is the homepage, display the title image, otherwise the header image
	// trim following slash off current URL for comparison sake

if (!(rtrim(current_url(), "/") == exhibit_builder_exhibit_uri())) {
	echo '<a href="' . exhibit_builder_exhibit_uri() . '">';
	echo '<img src="' . html_escape(url('themes/blackeyes/images/sidebar-title.jpg')) . '" alt="Banner Image. ' . metadata('exhibit', 'title') . '" title="' . metadata('exhibit', 'title') . '"/></a>';
}
?>

<p><br/></p>


<?php
// Check if not homepage and if URL string contains 'item'
if (!(current_url() == exhibit_builder_exhibit_uri()) and !(strpos(current_url(), "item"))  ) {

echo '<nav id="exhibit-child-pages">' . "\n";
    echo exhibit_builder_lower_page_nav(); 
echo '</nav>' . "\n";
}
?>

</div>



    <div id="content">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
