<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

<div class="exhibit-description">
	<?php echo $exhibit->description; ?>
</div>

<?php echo foot(); ?>
