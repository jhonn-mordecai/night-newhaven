<div class="night-live-wrapper">
	
	<div class="night-live-header">
		<img src="{$IMG_PATH}/night_logo_silver.svg" />
	</div>
	
	<div class="live-content-holder">

		<div class="embed-responsive embed-responsive-16by9 iframe-contain">
			<iframe name="video_player" src="https://player.vimeo.com/video/472423092" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		</div>
		
		<div class="caption">
			Filmed live at Partners Cafe, New Haven | October 2020
		</div>
		
		<div class="previous-events-holder">
			{foreach from=$live_streams item=event}
			<div class="previous-event">
				<a href="{$event.video_link}" data-caption="{$event.caption}" target="video_player">
					<div class="img-overlay-container">
						<div class="play-overlay">
							<i class="fa fa-play-circle" aria-hidden="true"></i>
						</div>
						<img src="{$IMG_PATH}/{$event.thumb}" />
					</div>
					<span>{$event.date}</span>
				</a>
			</div>
			{/foreach}					
		</div>
	</div>
</div>