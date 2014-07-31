<?php
$title = html_escape(__('Item #%s', $item->id));
echo head(array('title' => $title, 'bodyclass' => 'exhibits exhibit-item-show'));
?>
<div id="primary">
 <h1 class="item-title"><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>

 <div id="itemfiles">
     <?php echo files_for_item($options=array('imageSize' => 'fullsize')); ?>
 </div>
<div id="item-info-all">
	 
	<div id="transcribe-item">
  	<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
 	</div>

	<?php echo all_element_texts('item'); ?>

 	<?php if (metadata('item', 'Collection Name')): ?>
     	<div id="collection" class="field">
        	<h2><?php echo __('Collection'); ?></h2>
        	<div class="field-value"><p><?php echo link_to_collection_for_item(); ?></p>
		</div>
     	</div>
	<?php endif; ?>
 
	<?php if (metadata('item', 'has tags')): ?>
   	<div class="tags">
     		<h2><?php echo __('Tags'); ?></h2>
    		<?php echo tag_string('item'); ?>
 	</div>
 	<?php endif;?>

 </div>
</div>
<?php echo foot(); ?>
