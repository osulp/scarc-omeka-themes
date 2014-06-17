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
    <?php queue_js_url('http://viewshare.org/views/anne.bahde/ecas-letters-box-1-4/embed.js'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
 <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
<header>
<h1 id="main-title"><a href="/omeka/exhibits/show/ecas/the-fear/fear-main">Dear Professor Einstein:</a></h1>
<h2 id="main-slogan">The Emergency Committee of Atomic Scientists</h2>
<h3 id="sub-main-slogan">in Post-War America</h3>

<?php //echo exhibit_builder_page_nav(); ?>

<ul id="secondary-nav" class="exhibit-page-nav">
    <li>
        <ul>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/ecas/the-fear/fear-main">Atomic Fears</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/ecas/committee-main">The Committee</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/ecas/effort-main/">The Effort</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/ecas/response/response-main">The Response</a>
            </li>
            <li>
                <a class="exhibit-page-title" href="/omeka/exhibits/show/ecas/results/results-main">The Results</a>
            </li>
        </ul>
    </li>

</ul>


</header>

<div id="content">
<div id="main-nav-sidebar" class="main-nav">
<nav id="second-nav" >
    <ul>
    <li><a href="/omeka/exhibits/show/ecas/letters-to-the-emergency-commi/letters-to-the-emergency-commi/">Transcribe Letters</a></li>
		<li><a href="http://scarc.library.oregonstate.edu/omeka/exhibits/show/ecas/explore">Explore The Collection</a></li>
		<li><a href="/omeka/exhibits/show/ecas/tags/">Browse by Topic</a></li>
    </ul>
</nav>   
</div>     
<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
