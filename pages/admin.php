<?php

//session_start();

//if (!$_SESSION['login'] === true) {

//if ($_SESSION['login'] != true) {

// if (!$_SESSION['login'] === true) {
//     header("Location: ". SITE_URL ."/login");
// }

if (isset($_POST['logout'])) {

    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    header("Location: ". SITE_URL ."/login");
    exit();
}

// Process Data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    //$data = htmlspecialchars($data);
    return $data;
}

$error_msg = false;
$success_msg = false;
$artist = false;
$title = false;
$playlist = array();

if (isset($_POST['submit-playlist'])) {

    $date = $_POST['date'];
    $playlist_text = $_POST['playlist-text'];   

    if (empty($date)) {
        
        $error_msg = "A correctly formatted date is required.";        
    } elseif (empty($playlist_text)) {

        $error_msg = "Please enter a playlist.";
    } else {

        // Separate the playlist text into lines, break each line into artist/song by hyphen, populate playlist array
        $playlist_text = test_input($_POST['playlist-text']);
        $playlist_break = explode(PHP_EOL, $playlist_text);

        foreach ($playlist_break as $line) {

            $song = explode(" - ", $line);
            $artist = $song[0];
            $title = $song[1];
            
            $playlist[] = array( 'artist' => $artist, 'title' => $title, 'date' => $date );
        }
    }

    // Add playlist to DB
    foreach ($playlist as $entry => $details) {

        $artist = mysqli_real_escape_string($db_conn, $details['artist']);
        $title = mysqli_real_escape_string($db_conn, $details['title']);
        $date = mysqli_real_escape_string($db_conn, $details['date']);

        $query = sprintf("
            INSERT INTO playlists (artist, title, date)
            VALUES('%s', '%s', '%s')
            ",
            $artist,
            $title,
            $date
        ); 

        if (mysqli_query($db_conn, $query)) {

            $success_msg = "Playlist submitted!";
        } else {
            
            $error_msg = "Something went wrong and the list was not submitted.";
        }
    }
}

$query = "SELECT artist, COUNT(artist) AS count 
            FROM playlists WHERE playlists.date <> '2019-03-30' AND playlists.date <> '2018-03-31' 
            GROUP BY artist
            ORDER BY count DESC
            LIMIT 20
        ";
$result = mysqli_query($db_conn, $query);

$most_played_artists = array();

if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $most_played_artists[] = $row;
    }
}

//$smarty->assign("most_played_artists", $most_played_artists);


$query = "SELECT artist, title, COUNT(*) AS count 
            FROM playlists WHERE playlists.date <> '2019-03-30' AND playlists.date <> '2018-03-31' 
            GROUP BY artist, title 
            ORDER BY count DESC 
            LIMIT 20
        ";
$result = mysqli_query($db_conn, $query);

$most_played_songs = array();

if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $most_played_songs[] = $row;
    }
}

//$smarty->assign("most_played_songs", $most_played_songs);


mysqli_close($db_conn);

// $smarty->assign("success_msg", $success_msg);
// $smarty->assign("error_msg", $error_msg);



?>