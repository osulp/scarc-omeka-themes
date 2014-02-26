<?php 
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>


<nav id="exhibit-pages">
    <?php echo exhibit_builder_page_nav(); ?>
</nav>

<!--
<nav id="exhibit-child-pages">
    <?php // echo exhibit_builder_lower_page_nav(); ?>
</nav>
-->


<h1><span class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></span></h1>


<div id="primary">

	<div id="previous-next-nav">
		<div class="previous"><?php echo exhibit_builder_link_to_previous_page(); ?></div>
		<div class="next"><?php echo exhibit_builder_link_to_next_page(); ?></div>
	</div>

<br style="clear:both;"/>

	<div class="exhibit-content">
		<?php exhibit_builder_render_exhibit_page(); ?>
	</div>
	<div id="previous-next-nav">
		<div class="previous"><?php echo exhibit_builder_link_to_previous_page(); ?></div>
		<div class="next"><?php echo exhibit_builder_link_to_next_page(); ?></div>
	</div>
</div><!--end primary-->

<?php echo foot(); ?>
