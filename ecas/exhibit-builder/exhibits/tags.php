<?php
$title = __('Browse Collection by Topic');
echo head(array('title' => $title, 'bodyclass' => 'exhibits tags'));
?>
<div id='primary'>
<h1><span class="exhibit-page"><?php echo $title; ?></span></h1>
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
$ecasitems = get_records('Item', array('collection'=>76), null);
$tagArray = array();
$tagsArray = array();
foreach (loop('item', $ecasitems) as $ecasitem){
  $tagsArray = get_records('tag', array('record' => $ecasitem), null);
    foreach (loop('tag', $tagsArray) as $ecastag){		
//	echo $ecastag; echo '<br/>';
	$tagArray[] = $ecastag;
	}
 //   set_loop_records('tag', $tags);
  //  if (has_loop_records('tag')) {
   //   foreach (loop('tag') as $tag){
      //  echo metadata($ecasitem, array('Dublin Core', 'Title'));
//echo get_current_record($ecasitem)->Tags;
//  $tagArray[] = get_current_record($ecasitem)->Tags;
//	echo tag_string($ecasitem); echo '<br/>';
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
		echo tag_cloud($currentTags, 'items/browse');
		$currentTags = array();
		$currentTags[] = $newtag;
		echo "</div>";
		echo "<div class=\"tag-section\" id=\"tag-alpha-".$previus. "\">";
		
	}
	$previus = $nextletter;
}
echo tag_cloud($currentTags, 'items/browse');
echo "</div>";
//echo tag_string($ecasitems);

?>
</div>
<?php echo foot(); ?>
