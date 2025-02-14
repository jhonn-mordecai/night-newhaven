<?php

//Get Night dates for playlist select
$query = "SELECT DISTINCT date FROM playlists ORDER BY date DESC";
$result = mysqli_query($db_conn, $query);
$dateResult = mysqli_num_rows($result);
$night_dates = array();

if ($dateResult > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		
		$night_dates[] = $row['date'];
	}
} 

mysqli_close($db_conn);

//SVG Logo Code
$night_logo = '
	<?xml version="1.0" encoding="utf-8"?>
	<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
	<svg class="logo" version="1.1" id="outlines" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 252.9 119.8" style="enable-background:new 0 0 252.9 119.8;" xml:space="preserve">
	<g>
		<polygon class="logo-silver" points="50.7,87.7 50.7,18.3 40.2,18.3 40.2,51.6 9.6,18.3 0.4,18.3 0.4,87.7 12.4,87.7 12.4,37.1 40.3,67 
			40.3,87.7 	"/>
		<polygon class="logo-silver" points="70.6,18.3 59.3,18.3 59.3,94.9 40.4,94.9 40.4,103.8 59.4,103.8 59.4,119.5 70.7,119.5 70.7,103.7 
			92.3,103.7 92.3,94.9 70.6,94.9 	"/>
		<path class="logo-silver" d="M181.1,30.9h-27V18.2h-11.4v69.4h11.6V48h26.9v39.6h11.1V18.3h-11.2V30.9z M181.3,40.4h-27.1v-2.8h27.1V40.4z"
			/>
		<polygon class="logo-silver" points="232.4,18.2 232.4,0.2 220.6,0.2 220.6,18.3 199.8,18.3 199.8,27.1 220.6,27.1 220.6,103.5 
			232.7,103.5 232.7,27.1 252.4,27.1 252.4,18.2  "/>
		<g>
			<path class="logo-silver" d="M134.1,32.3v55.8c-5.2-0.6-10.2-1.4-15.1-2.4c-4.9-0.9-9.4-2.2-13.7-3.7c-4.3-1.5-8.2-3.4-11.7-5.6
				c-3.5-2.2-6.6-4.9-9.1-8.1c-2.5-3.2-4.5-6.9-5.9-11.1c-1.4-4.2-2.1-9.1-2.1-14.7c0-3.8,0.7-7.1,2.1-10s3.4-5.3,5.9-7.3
				c2.5-2,5.5-3.6,8.8-4.8c3.4-1.2,7-2.1,10.8-2.6c2.6-0.4,5.3-0.6,8-0.6c1.4,0,2.6,0,3.9,0c1.2,0,2.4,0.1,3.5,0.1
				c1.4,0.1,2.6,0.2,3.9,0.4c1.2,0.1,2.4,0.2,3.5,0.4v8.1c-1.2-0.1-2.3-0.3-3.3-0.5c-1-0.2-2.1-0.4-3.2-0.5c-1.1-0.2-2.3-0.3-3.6-0.4
				c-1.3-0.1-2.8-0.1-4.5-0.1c-2.1,0.1-4.4,0.3-6.9,0.7c-2.5,0.4-5,1.2-7.3,2.3c-2.3,1.1-4.3,2.6-6,4.5c-1.7,1.9-2.8,4.3-3.3,7.2
				c-0.6,3.8-0.5,7.6,0.5,11.7c1,4,2.8,7.8,5.5,11.3c2.7,3.5,6.3,6.5,10.9,9.1c4.6,2.6,10.2,4.3,16.8,5.2V32.3H134.1z"/>
		</g>
	</g>
	</svg>
';

?>