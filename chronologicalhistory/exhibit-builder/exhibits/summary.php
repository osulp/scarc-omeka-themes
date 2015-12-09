<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

<!--<h1><?php //echo metadata('exhibit', 'title'); ?></h1>i-->
<?php //echo exhibit_builder_page_nav(); ?>
<div id="primary" class="landing-page-primary">
<?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
<div class="exhibit-description">
    <?php echo $exhibitDescription; ?>
</div>
<?php endif; ?>

<div id="landing-page-image-wrapper">
<img id="landing-page-image" src="http://scarc.library.oregonstate.edu/omeka/files/img/chronologicalhistory-iconwords.png" />
</div>
<?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
<div class="exhibit-credits">
    <h3><?php echo __('Credits'); ?></h3>
    <p><?php echo $exhibitCredits; ?></p>
</div>
<?php endif; ?>
</div>
<nav id="exhibit-pages" class="landing-page-exhibit-nav">
    <ul>
      <?php
      set_exhibit_pages_for_loop_by_exhibit();
      foreach (loop('exhibit_page') as $exhibitPage) {
        if (!$exhibitPage) {
          $exhibitPage = get_current_record('exhibit_page');
        }
        $html = '<li>'
          . metadata($exhibitPage, 'title');
        $children = $exhibitPage->getChildPages();
        if ($children) {
          $html .= '<ul>';
          foreach ($children as $child) {
            $html .= exhibit_builder_page_summary($child);
            release_object($child);
          }
          $html .= '</ul>';
        }
        $html .= '</li>';
        echo $html;
      }
      ?>
    </ul>
</nav>

<?php echo foot(); ?>
