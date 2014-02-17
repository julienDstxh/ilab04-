<?php
$url = "http://feeds.feedburner.com/alistapart/main";
$rss = simplexml_load_file($url);
echo '<ul class="feed links">';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y');
 echo '<li><span class="drag ss-icon">directright</span><a href="'.$item->link.'">'.utf8_decode($item->title).'</a><br> '.$date.' <hr></li>';
}
echo '</ul>';
?>