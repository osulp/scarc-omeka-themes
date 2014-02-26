<?php 
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>


<nav id="exhibit-child-pages">
    <?php echo exhibit_builder_lower_page_nav(); ?>
</nav>


<div id="primary">
	<div id="previous-next-nav">
		<div class="previous"><?php echo exhibit_builder_link_to_previous_page(); ?></div>
		<div class="next"><?php echo exhibit_builder_link_to_next_page(); ?></div>
	</div>

<!--
<h2><span class="exhibit-page"><?php // echo metadata('exhibit_page', 'title'); ?></span></h2>
-->

<?php // $page = exhibit_builder_get_current_page(); ?>

	<h2><?php echo metadata('exhibit_page', 'title'); ?></h2>
	<div class="exhibit-content">
		<?php exhibit_builder_render_exhibit_page(); ?>
	</div>
	<div id="previous-next-nav">
		<div class="previous"><?php echo exhibit_builder_link_to_previous_page(); ?></div>
		<div class="next"><?php echo exhibit_builder_link_to_next_page(); ?></div>
	</div>
</div><!--end primary-->
<?php echo foot(); ?>
