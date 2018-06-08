<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo metadata('exhibit', 'title'); ?> - <?php echo option('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Plugin Stuff -->
<?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


<!-- Stylesheets -->
<?php 
    queue_css_file('screen');
    echo head_css(); 
?>

</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<!-- Adds Omeka admin bar when logged in -->
<?php // fire_plugin_hook('public_body', array('view'=>$this)); ?>

<div id="wrap">

<?php
// header div below exhibit-nav due to float:left of exhibit-nav
?>

    <div id="exhibit-nav">
    	<?php echo exhibit_builder_page_nav();?>

		<h5><a href="<?php echo html_escape(url('items/search?collection=56')); ?>">Search Items</a></h5>

		<h5><a href="<?php echo html_escape(url('exhibits')); ?>">Back to Exhibits List</a></h5>
    </div>


<div id="header">
<?php 
// If this is the homepage, display the title image, otherwise the header image
	// trim following slash off current URL for comparison sake

if (rtrim(current_url(), "/") == exhibit_builder_exhibit_uri()) {
	echo '<a href="' . exhibit_builder_exhibit_uri() . '/introduction/introduction">';
	echo '<img src="' . html_escape(url('themes/womenswords/images/title.jpg')) . '"  alt="Title Image. ' . metadata('exhibit', 'title') . '" title="' . metadata('exhibit', 'title') . '"/></a>';
} else {
	echo '<a href="' . exhibit_builder_exhibit_uri() . '">';
	echo '<img src="' . html_escape(url('themes/womenswords/images/banner.png')) . '" alt="Banner Image. ' . metadata('exhibit', 'title') . '" title="' . metadata('exhibit', 'title') . '"/></a>';
}
?>
</div>


    <div id="content">

<!--
		<h3><?php // echo html_escape($section->title); ?></h3>
-->

    	<?php // echo exhibit_builder_page_nav(); ?>
    <?php // echo flash(); ?>				

		
