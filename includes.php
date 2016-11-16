<?php 
//Update the last updated date here
$last_updated = "6/6/66";

//XML processor for the blog feed
$xml = simplexml_load_file("http://not-fun.dreamwidth.org/data/rss") or die ("Error: NOTHING WORKS AAAA");
$feed = $xml->channel->item[0]->description;

?>