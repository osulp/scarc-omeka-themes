
<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')), 'bodyclass' => 'item exhibit-item-show')); ?>

<nav id="exhibit-pages">
    <?php echo exhibit_builder_page_nav(); ?>
</nav>


<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>

<div id="primary">

    <div>
    <?php if (metadata('item', 'has files')): ?>
        <div class="element-text" style="float: left;"><?php echo files_for_item(); ?></div>
    <?php endif; ?>
    
    <b>Interviewee:</b> <?php echo metadata('item', array('Item Type Metadata', 'Interviewee')); ?><br/>
    <b>Interviewer:</b> <?php echo metadata('item', array('Item Type Metadata', 'Interviewer')); ?><br/>
    <b>Interview Date: </b> <?php echo metadata('item', array('Dublin Core', 'Date')); ?><br/>
    <b>Location:</b> <?php echo metadata('item', array('Item Type Metadata', 'Location')); ?><br/>
    <b>Duration:</b> <?php echo metadata('item', array('Item Type Metadata', 'Duration')); ?>

    <br/>&#160;<br/>

    <p><?php echo metadata('item', array('Dublin Core', 'Description')); ?></p>

    </div>


    <?php echo metadata('item', array('Item Type Metadata', 'OHMS Object')); ?>


    <?php echo all_element_texts('item', array('show_element_set_headings' => false)); ?>

</div><!-- end primary -->

<aside id="sidebar">

    <!-- The following returns all of the files associated with an item. -->
    <?#php if (metadata('item', 'has files')): ?>
<!--
    <div id="itemfiles" class="element">
        <h3><?#php echo __('Files'); ?></h3>
        <div class="element-text"><?#php echo files_for_item(); ?></div>
    </div>
-->
    <?#php endif; ?>

    <!-- If the item belongs to a collection, the following creates a link to that collection. -->
    <?php if (metadata('item', 'Collection Name')): ?>
    <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
    </div>
    <?php endif; ?>

    <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item', 'has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
    </div>

    <?#php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

</aside>

<?php echo foot(); ?>
