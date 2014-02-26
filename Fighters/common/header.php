<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php echo metadata('exhibit', 'title'); ?> - <?php echo option('site_title'); ?></title>

<!-- Meta -->
<meta name="description" content="OSU Archives" /> 
<meta name="keywords" content="Oregon State University Special Collections & Archives Research Center" /> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<meta name="author" content="Oregon State University Special Collections & Archives Research Center" /> 
<meta name="robots" content="all" /> 
<meta name="rating" content="general" /> 

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
<?php queue_js_url('http://osulibrary.oregonstate.edu/specialcollections/omeka/themes/Fighters/jquery-1.4.2.js'); ?>
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

<div id="wrap2">
<a href="<?php echo exhibit_builder_exhibit_uri(); ?>"><img src="<?php echo html_escape(url('themes/Fighters/Other%20Images/banner.png')); ?>" alt="Fighters on the Farm Front: Oregon's Emergency farm Labor, 1943-1947" /></a>
</div>

<div id="wrap">    
	<div id="exhibit-nav">
    	 <?php echo exhibit_builder_page_nav();?>
    </div>
    
    <div id="content">
    	<?php // echo exhibit_builder_page_nav(); ?>
    <?php // echo flash(); ?>
	
