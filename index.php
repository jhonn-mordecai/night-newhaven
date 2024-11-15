<?php
    require_once('includes/global_variables.php');
    require_once('includes/db_conn.php');
    include_once('pages/default.php');
    include_once('includes/analyticstracking.php');

    require_once('includes/head.php');
?>

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
                        <p>GOTH - DARKWAVE - POST-PUNK - INDUSTRIAL - ETC</p>
                        <p>A welcoming place for the Goths, Rivetheads, Baby Bats, Cyberpunks, Thrashers, Fetish Queens, Pastels, Elders, the Dark-Curious, and Alternative types. All will find a home in the recesses of ₦‡₲H†.</p>					
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
                                
           
            <?php require_once('includes/footer.php'); ?>
        </div>
        
		
		<?php require_once('includes/bottom_matter.php'); ?>

	</body>
</html>