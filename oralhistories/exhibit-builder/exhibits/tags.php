<?php
$title = __('Browse Exhibit by Topic');
echo head(array('title' => $title, 'bodyclass' => 'exhibits tags'));
?>

<nav id="exhibit-pages">
    <?php echo exhibit_builder_page_nav(); ?>
</nav>

<h1><span class="exhibit-page"><?php echo $title; ?></span></h1>

<!--
<p><?#php echo $exhibit->slug; ?></p>
-->

<div id='primary'>
<div id='tag-nav'>
<a href="#tag-alpha-A" class="tag-nav-link">A</a>
<a href="#tag-alpha-B" class="tag-nav-link">B</a>
<a href="#tag-alpha-C" class="tag-nav-link">C</a>
<a href="#tag-alpha-D" class="tag-nav-link">D</a>
<a href="#tag-alpha-E" class="tag-nav-link">E</a>
<a href="#tag-alpha-F" class="tag-nav-link">F</a>
<a href="#tag-alpha-G" class="tag-nav-link">G</a>
<a href="#tag-alpha-H" class="tag-nav-link">H</a>
<a href="#tag-alpha-I" class="tag-nav-link">I</a>
<a href="#tag-alpha-J" class="tag-nav-link">J</a>
<a href="#tag-alpha-K" class="tag-nav-link">K</a>
<a href="#tag-alpha-L" class="tag-nav-link">L</a>
<a href="#tag-alpha-M" class="tag-nav-link">M</a>
<a href="#tag-alpha-N" class="tag-nav-link">N</a>
<a href="#tag-alpha-O" class="tag-nav-link">O</a>
<a href="#tag-alpha-P" class="tag-nav-link">P</a>
<a href="#tag-alpha-Q" class="tag-nav-link">Q</a>
<a href="#tag-alpha-R" class="tag-nav-link">R</a>
<a href="#tag-alpha-S" class="tag-nav-link">S</a>
<a href="#tag-alpha-T" class="tag-nav-link">T</a>
<a href="#tag-alpha-U" class="tag-nav-link">U</a>
<a href="#tag-alpha-V" class="tag-nav-link">V</a>
<a href="#tag-alpha-W" class="tag-nav-link">W</a>
<a href="#tag-alpha-X" class="tag-nav-link">Y</a>
<a href="#tag-alpha-Y" class="tag-nav-link">X</a>
<a href="#tag-alpha-Z" class="tag-nav-link">Z</a>
</div>
<?php 
$items = get_records('Item', array('collection'=>101), null);
$tagArray = array();
$tagsArray = array();
foreach (loop('item', $items) as $item){
  $tagsArray = get_records('tag', array('record' => $item), null);
    foreach (loop('tag', $tagsArray) as $tag){		
//	echo $tag; echo '<br/>';
	$tagArray[] = $tag;
	}
 //   set_loop_records('tag', $tags);
  //  if (has_loop_records('tag')) {
   //   foreach (loop('tag') as $tag){
      //  echo metadata($item, array('Dublin Core', 'Title'));
//echo get_current_record($item)->Tags;
//  $tagArray[] = get_current_record($item)->Tags;
//	echo tag_string($item); echo '<br/>';
//      }
 //   }
}

natcasesort($tagArray);
$allTags = array();
$allTags = array_unique($tagArray);
reset($allTags);
$previus = substr(current($allTags),0,1);
$currentTags = array();
echo "<div class=\"tag-section\" id=\"tag-alpha-".$previus. "\">";

foreach($allTags as $newtag){
	$nextletter = substr($newtag,0,1);
	if(strcasecmp($previus, $nextletter) == 0){
		$currentTags[] = $newtag;
	}else{
		$previus = $nextletter;
		echo tag_cloud($currentTags, 'exhibits/show/' . $exhibit->slug . '/itemsbrowse');
		$currentTags = array();
		$currentTags[] = $newtag;
		echo "</div>";
		echo "<div class=\"tag-section\" id=\"tag-alpha-".$previus. "\">";
		
	}
	$previus = $nextletter;
}
echo tag_cloud($currentTags, 'items/browse');
echo "</div>";
//echo tag_string($items);

?>
</div>
<?php echo foot(); ?>
