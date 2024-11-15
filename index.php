<?php
    require_once('includes/global_variables.php');
    require_once('includes/db_conn.php');
    include_once('pages/default.php');
    include_once('includes/analyticstracking.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>		
		<title>: NIGHT :</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="NIGHT is a dark dance party in New Haven, CT, taking place the 2nd Saturday of every month. A welcoming place for the Goths, Rivetheads, Baby Bats, Cyberpunks, Thrashers, Fetish Queens, Pastels, Elders, the Dark-Curious, and Alternative types.">
		<meta name="keywords" content="night, new haven, night new haven, new haven goth night, connecticut goth, connecticut goth night, night partners, partners new haven, nhv, connecticut, ct, goth, club, goth club, goth night, dark dance party, dance party, club night, post-punk, darkwave, industrial, rivethead, ebm, new wave, witch house, partners, fetish, alternative, lgbtq, queer friendly, gay-friendly, trans-friendly">
		<meta name="author" content="John Mordecai">
		
		<meta property="og:title" content="NIGHT" />
		<meta property="og:site_name" content="NIGHT" />
		<meta property="og:description" content="NIGHT is a dark dance party in New Haven, CT, taking place on the 2nd Saturday of each month." />
		<meta property="og:image" content="http://nightnewhaven.club/img/night-og.jpg" />
		<meta property="og:image:type" content="image/jpg" />
		<meta property="og:url" content="http://nightnewhaven.club" />
				
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?= IMG_PATH; ?>/favicon_blk.png" />
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- My CSS -->
		<link rel="stylesheet" href="<?= SITE_URL; ?>/styles/styles.css">
	</head>
	
    <body>
		<div class="page-wrapper home-padding">
            <section class="top-section">
                <div class="logo-container">
                    <?= $night_logo; ?> 
                </div>
            </section>

            <section class="intro">
                <div class="container-950">	
                    <div class="intro-text">
                        <p>
                            † A DANCE NIGHT FOR ALL THINGS DARK †<br />
                            NEW HAVEN, CT
                        </p>
                        <p>GOTH - DARKWAVE - INDUSTRIAL - POST-PUNK - ETC</p>
                        <p>A welcoming place for the Goths, Rivetheads, Baby Bats, Cyberpunks, Thrashers, Fetish Queens, Pastels, Elders, the Dark-Curious, and Alternative types.
            All will find a home in the recesses of ₦‡₲H†.</p>					
                    </div>

                    <div class="night-info">
                        <div class="info-inner">
                            <p>NIGHT is every 2nd Saturday <span class="responsive-break"><br></span>(sometimes 5th Saturday, too).</p> 
                            <p class="details"><a class="text-link" href="https://www.partnerscafe.com/" title="" target="_blank">Partners Cafe</a> | 365 Crown St., New Haven | 10pm | FREE</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="playlists">
                <div class="container-950">
                    <div class="playlist-wrapper">
                        <h2>Playlists</h2>
                        <div class="selector">
                            <label class="select-label">
                                <select name="date-selector">

                                    <option value="empty">--</option>
                                    <?php foreach($night_dates as $date): ?>
                                        <option value="<?= $date; ?>"><?= date("F m, Y", strtotime($date)); ?></option>
                                    <?php endforeach; ?>

                                </select>
                                <span class="select-span">Choose Date</span>
                            </label>
                        </div>
                        <div class="playlist">
                            <p class="moon-icon"><i class="fa fa-moon-o" aria-hidden="true"></i></p>
                            <ul>
                                <!-- Playlist items go here via Ajax -->
                            </ul>
                            <p class="moon-icon"><i class="fa fa-moon-o" aria-hidden="true"></i></p>
                            <button class="btn btn-goth-red close-list">X</button>
                        </div>
                        <p class="moon-icon bottom-moon"><i class="fa fa-moon-o" aria-hidden="true"></i></p>
                    </div>
                </div>
            </section>
                                
            <footer>
                <div class="container-500">
                    <div class="bottom-info">
                        <div class="links">
                            <a class="diamond-link" href="https://www.facebook.com/night.partners" title="NIGHT on Facebook" target="_blank">
                                <i class="fa fa-facebook diamond-icon" aria-hidden="true"></i>
                            </a>
                            <a class="diamond-link" href="https://www.instagram.com/gothnight.ct" title="NIGHT on Instagram" target="_blank">
                                <i class="fa fa-instagram diamond-icon" aria-hidden="true"></i>
                            </a>
                            <a class="diamond-link" title="Email" href="mailto:<?= CONTACT_EMAIL; ?>">
                                <i class="fa fa-envelope diamond-icon" aria-hidden="true"></i>
                            </a>
                        </div>
                        <img src="<?= IMG_PATH; ?>/night_logo_silver.svg" />
                        <p class="copy">Copyright &copy; <?= date('Y'); ?></p>
                    </div>
                </div>
            </footer>
        </div>
        
		
		<!-- jQuery, Tether, Bootstrap JS. -->
		<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<script src="<?= SITE_URL; ?>/js/scripts.js"></script>

	</body>
</html>