<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo metadata('exhibit', 'title'); ?> - <?php echo option('site_title'); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Plugin Stuff -->
<?php fire_plugin_hook('public_head', array('view'=>$this)); ?>
<?php include ('http://oregonstate.edu/u_central/top-hat/osu-standard.php?render=css'); ?>
<?php include ('http://oregonstate.edu/u_central/top-hat/osu-standard.php?render=js&jquery=1'); ?>

<!-- Stylesheets -->
<?php 
    queue_css_file('screen');
    echo head_css(); 
?>

<!-- JavaScripts -->
<?php queue_js_url('http://osulibrary.oregonstate.edu/specialcollections/omeka/themes/extension/jquery-1.4.2.js'); ?>
		<?php queue_js_file('googleanalytics'); ?>
<?php echo head_js(); ?>

</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<div id="wrap3">
<!--  START OSU TOP HAT --> 
<div id="osu-top-hat"> 
	<div id="osu-top-hat-interior" class="wrapper4"> 
		<a href="http://oregonstate.edu/"><img class="tag" src="http://oregonstate.edu/u_central/top-hat/images/osu-tag.gif" width="101" height="119" alt="Oregon State University" /></a> 
		<div id="banner-links">
			<a href="http://oregonstate.edu/">OSU Home</a> | <a href="http://osulibrary.oregonstate.edu/">Libraries Home</a>
		</div>
		
		<div id="title">
			<h5><a href="http://scarc.library.oregonstate.edu">Special Collections &amp; Archives Research Center</a> - <a href="http://osulibrary.oregonstate.edu">OSU Libraries</a></h5>
        </div>
      </div> 
</div> 
<!--  END OSU TOP HAT --> 
</div>


<div id="wrap">

<?php 
// If this is the homepage, display the title image, otherwise the header image
	// trim following slash off current URL for comparison sake

if (!(rtrim(current_url(), "/") == exhibit_builder_exhibit_uri())) {
	echo '<a href="' . exhibit_builder_exhibit_uri() . '">';
	echo '<img src="' . html_escape(url('themes/extension/images/banner.jpg')) . '" alt="Banner Image. ' . metadata('exhibit', 'title') . '" title="' . metadata('exhibit', 'title') . '"/></a>';
}
?>

    <div id="exhibit-nav">
    	<?php echo exhibit_builder_page_nav();?>

		<h5><a href="<?php echo html_escape(url('items/search?collection=36')); ?>">Search Items</a></h5>

		<h5><a href="<?php echo html_escape(url('exhibits')); ?>">Back to Exhibits List</a></h5>
    </div>

    <div id="content">

<?php 
// If this is the homepage, display the title image, otherwise the header image
	// trim following slash off current URL for comparison sake

if (rtrim(current_url(), "/") == exhibit_builder_exhibit_uri()) {
	echo '<a href="' . exhibit_builder_exhibit_uri() . '/intro/intro">';
	echo '<img src="' . html_escape(url('themes/extension/images/title.jpg')) . '"  alt="Title Image. ' . metadata('exhibit', 'title') . '" title="' . metadata('exhibit', 'title') . '"/></a>';
}
?>

<!--
		<h3><?php // echo html_escape($section->title); ?></h3>
-->

    	<?php // echo exhibit_builder_page_nav(); ?>
    <?php // echo flash(); ?>				
