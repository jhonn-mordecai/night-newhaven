<?php
    require_once('includes/global_variables.php');
    require_once('includes/db_conn.php');
    include_once('pages/live.php');
    include_once('includes/analyticstracking.php');

    require_once('includes/head.php');
?>

<body>
    <div class="night-live-wrapper">
        
        <div class="night-live-header">
            <img src="<?= IMG_PATH; ?>/night_logo_silver.svg" />
        </div>
        
        <div class="live-content-holder">

            <div class="embed-responsive embed-responsive-16by9 iframe-contain">
                <iframe name="video_player" src="https://player.vimeo.com/video/472423092" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            
            <div class="caption">
                Filmed live at Partners Cafe, New Haven | October 2020
            </div>
            
            <div class="previous-events-holder">

                <?php foreach($live_streams as $stream): ?>
                <div class="previous-event">
                    <a href="<?= $stream['video_link']; ?>" data-caption="<?= $stream['caption']; ?>" target="video_player">
                        <div class="img-overlay-container">
                            <div class="play-overlay">
                                <i class="fa fa-play-circle" aria-hidden="true"></i>
                            </div>
                            <img src="<?= IMG_PATH; ?>/<?= $stream['thumb']; ?>" />
                        </div>
                        <span><?= $stream['date']; ?></span>
                    </a>
                </div>
                <?php endforeach; ?>	
                				
            </div>
        </div>
    </div>
		
	<?php require_once('includes/bottom_matter.php'); ?>

</body>
</html>