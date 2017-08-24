<?php
$pageTitle = __('Browse Items by Topic: ' . $topic);
echo head(array('title' => $pageTitle, 'bodyclass' => 'items browse'));
?>

<nav id="exhibit-pages">
    <?php echo exhibit_builder_page_nav(); ?>
</nav>

<h1><?php echo $pageTitle;?></h1>
<h3><?php echo __('(%s total)', $total_results); ?></h3>

<?php // echo item_search_filters(); ?>


<?php echo pagination_links(); ?>

<?php if ($total_results > 0): ?>

<?php
$sortLinks[__('Title')] = 'Dublin Core,Title';
$sortLinks[__('Creator')] = 'Dublin Core,Creator';
$sortLinks[__('Date Added')] = 'added';
?>
<div id="sort-links">
    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
</div>

<?php endif; ?>

<?php foreach (loop('items') as $item): ?>
<div class="item hentry">
    <h3><?php echo str_replace("items/show", "exhibits/show/brewingvoices/item", link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink'))); ?></h3>
    <div class="item-meta">
    <?php if (metadata('item', 'has thumbnail')): ?>
    <div class="item-img">
        <?php echo str_replace("items/show", "exhibits/show/brewingvoices/item", link_to_item(item_image('thumbnail'))); ?>
    </div>
    <?php endif; ?>

    <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250))): ?>
    <div class="item-description">
        <?php echo $description; ?>
    </div>
    <?php endif; ?>

    <?php if (metadata('item', 'has tags')): ?>
    <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
        <?php echo tag_string('items', 'exhibits/show/brewingvoices/itemsbrowse'); ?></p>
    </div>
    <?php endif; ?>

    <?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>

    </div><!-- end class="item-meta" -->
</div><!-- end class="item hentry" -->
<?php endforeach; ?>

<?php echo pagination_links(); ?>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>
