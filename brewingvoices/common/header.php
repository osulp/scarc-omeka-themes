<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file('style');

    echo head_css();
    ?>
		<link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
	<?php queue_js_file('googleanalytics'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
 <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
<header>
<!--
<img src="/omeka/themes/ecas/images/osu-tag.png" width="101" height="119" id="osutag"/>
-->
<h1 id="main-title"><a href="/omeka/exhibits/show/brewingvoices">&#160;</a></h1>
<h2 id="main-slogan"></h2>
<h3 id="sub-main-slogan"></h3>

<?php //echo exhibit_builder_page_nav(); ?>

<ul id="secondary-nav" class="exhibit-page-nav">
    <li>
        <ul>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/brewingvoices/brewers/">Brewers</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/brewingvoices/growers/">Growers</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/brewingvoices/scientists/">Scientists</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/brewingvoices/women/">Women</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/brewingvoices/writers/">Writers and Artists</a>
            </li>
        </ul>
    </li>

</ul>


</header>

<div id="content">
<div id="main-nav-sidebar" class="main-nav">
<nav id="second-nav" >
    <ul>
    <li><a href="/omeka/exhibits/show/brewingvoices/all-interviews/">All Interviews</a></li>		
		<li><a href="/omeka/exhibits/show/ecas/tags/">Browse by Topic</a></li>
	<li><a href="http://scarc.library.oregonstate.edu/omeka/exhibits/show/brewingvoices/about">About this Project</a></li>
    </ul>
</nav>   
</div>     
<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
