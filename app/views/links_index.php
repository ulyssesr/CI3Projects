<h1><?php echo $title; ?></h1>
<article class="links">
<p>
<?php
// display categories or tags
echo anchor('links', ucwords('home'));
echo ' &middot; '; 
// display tags
$answer = '';
foreach($tagquery as $item):
   $answer .= anchor('links/tag/'.$item->tag,ucwords($item->tag));
   $answer .= ' &middot; ';  
endforeach;
$trimmed = rtrim($answer, ' &middot; '); 
echo $trimmed; 
?>
</p>
<?php 
// main display
$new = array('target'=>'_new','rel'=>'nofollow');
$answer = ''; 
foreach($query as $item):
   $answer .= anchor($item->url,$item->anchor,$new);
   $answer .= ', ';
endforeach;
$trimmed = rtrim($answer, ', ');
echo $trimmed;
echo '.';
?>
</article>
