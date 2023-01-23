<?php 
	
	
$live_streams = array(
	
	array(
		"video_link" => "https://player.vimeo.com/video/472423092",
		"caption" => "Filmed live at Partners Cafe, New Haven | October 2020",
		"thumb" => "live-10-31-thumb-400x250.jpg",
		"date" => "Halloween 2020"
	),
	array(
		"video_link" => "https://player.vimeo.com/video/452754979",
		"caption" => "Filmed live at Partners Cafe, New Haven | August 2020",
		"thumb" => "live-8-29-thumb-400x250.jpg",
		"date" => "Aug. 29, 2020"
	),
	
);


$smarty->assign("live_streams", $live_streams);