<?php
    require_once('includes/global_variables.php');
    require_once('includes/db_conn.php');
    include_once('includes/analyticstracking.php');
    require_once('includes/head.php');
    include_once('pages/admin.php');
?>

<body>
    <div class="page-wrapper">
        <div class="admin-container">
            <div class="container-950">
                <div class="logo-container">
                    <img src="<?= IMG_PATH; ?>/night_logo_silver.svg" class="admin-logo" />
                    <span class="admin-sub-head">Admin Portal</span>
                </div>
                <div class="card admin-box">
                    <div class="card-header">
                        <h4>Enter Playlist</h4>
                    </div>
                    <div class="card-body">
                        <form id="playlist" method="post">
                            <div class="row field-row justify-content-start">
                                <div class="col-md-6">
                                    <input class="form-control text-input" type="text" name="date" placeholder="Date (ex. yyyy-mm-dd)" />
                                </div>
                            </div>
                            <div class="row field-row">
                                <div class="col-12">
                                    <p class="caption">Each artist and song separated by a space+dash+space (ex. "Artist - Song Title").<br />One song per line.</p>
                                    <textarea class="form-control text-input" name="playlist-text" form="playlist" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-2 text-center">
                                    <label class="ready-submit-label" for="ready-submit">
                                        <input id="ready-submit" type="checkbox" name="ready-submit" value="ready-submit" />
                                        <i class="fa fa-square-o" aria-hidden="true"></i> &nbsp;OK
                                    </label>
                                </div>
                                <div class="col-md-10">
                                    <button class="btn btn-goth-red btn-block submit-playlist" name="submit-playlist" type="submit" disabled>Enter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <br>
                <?php if($error_msg): ?>
                    <div class="error-msg red-text text-center">
                        <?= $error_msg; ?> 
                    </div>
                <?php elseif($success_msg): ?>
                    <div class="success-msg text-center">
                        <?= $success_msg; ?>
                    </div>
                <?php else: ?>
                    &nbsp;
                <?php endif; ?>
                <br><br>

                <div class="card admin-box">
                    <div class="card-header">
                        <h4>Search Playlists</h4>
                    </div>
                    <div class="card-body">
                        <div class="row field-row form-row">
                            <div class="col-md-6">
                                <input class="form-control text-input" type="text" name="item-search" placeholder="Artist/Song Title" />
                            </div>
                            <div class="col-md-6">
                                <div class="row form-row">
                                    <div class="col-md-6">
                                        <button class="btn btn-block btn-goth-red playlist-search-button" name="search-playlist" role="button">Search</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-block btn-secondary clear-search-field">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="playlist-search-results">
                            <!-- Ajax results go here.  -->
                        </div>
                    </div> 
                </div>
            </div>

            <br /><br /><br /><br />
            <div class="container-1140">
                <div class="stat-count-box">
                    <div class="stat-count-header">
                        Most Played Songs
                    </div>
                    <div class="stat-listings">
                        <div class="column-container col-contain-2">
                            <ol>
                                <?php foreach($most_played_songs as $song): ?>
                                <li>
                                    <span class="result-item"><span class="result-artist"><?= $song['artist']; ?></span> - <?= $song['title']; ?></span> - <span class="result-count"><?= $song['count']; ?> plays</span>
                                </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </div>
                </div>

                <br /><br />

                <div class="stat-count-box">
                    <div class="stat-count-header">
                        Most Played Artists
                    </div>
                    <div class="stat-listings">
                        <div class="column-container col-contain-4">
                            <ol>
                                <?php foreach($most_played_artists as $result): ?>
                                <li>
                                    <span class="result-item"><span class="result-artist"><?= $result['artist']; ?></span></span>&nbsp;&nbsp;- <span class="result-count"><?= $result['count']; ?> plays</span>
                                </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="note">
                    Counts are for reference only; may not be 100% accurate due to irregularities in the database. Will be fixed one day. Maybe.
                </div>
                <br><br>

                <form id="logout" method="post">
                    <button class="btn btn-block btn-secondary" name="logout" type="submit">Log Out</button>
                </form>
            </div>
            <br><br>
        </div>    


    </div>

</body>
</html>