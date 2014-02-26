<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

<div class="exhibit-description">
	<?php echo $exhibit->description; ?>
</div>

<div id="exhibit-credits">	
	<h3>Credits</h3>
	<p><?php echo html_escape($exhibit->credits); ?></p>
</div>

<?php echo foot(); ?>
