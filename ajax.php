<?php

session_start();

require_once('includes/global_variables.php');
require_once('includes/db_conn.php');

$result_array = array("success" => false);
$action = $_POST['action'];

// Process Data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// if(!isset($_POST['action'])) { $action = ''; }
// else {$action = 'action'; }

if ($action == 'search_playlist') {

    $search_item = test_input($_POST['search_item']);
    $search_results = array();
    $search_results_html = false;
    $result_count = 0;

    if (empty($search_item)) {

        $result_array['success'] = false;
        $result_array['search_results_html'] = '<p>Please enter something in the search field.</p>';
        $result_array['result_count'] = 0;
    } else {

        $query = sprintf("
            SELECT * FROM playlists
            WHERE artist LIKE '%%%s%%'
            OR title LIKE '%%%s%%'
            ORDER BY date DESC
            ",
            mysqli_real_escape_string($db_conn,$search_item),
            mysqli_real_escape_string($db_conn,$search_item)
        );

        $result = mysqli_query($db_conn, $query);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                
                $search_results[] = array('artist' => $row['artist'], 'title' => $row['title'], 'date' => $row['date'] );
            }
        }

        if (empty($search_results)) {

            //$search_results_html = '<p>No results.</p>';
            $result_array['result_count'] = 0;
        } else {

            $result_count = count($search_results);
            foreach ($search_results as $key => $results) {
                
                $search_results_html .= '<p>' . trim($results['artist']) . ' - ' . trim($results['title']) . '<br><b>Played:</b> ' . trim($results['date']) . '</p><hr>';
            }
        }
        
        $result_array['success'] = true;
        $result_array['search_results_html'] = $search_results_html;
        $result_array['result_count'] = $result_count;
    }
}
elseif ($action == 'select_playlist_date') {

    $date = test_input($_POST['date']);

    $query = sprintf("
        SELECT * FROM playlists
        WHERE date = '%s'
        ORDER BY id ASC
        ",
        mysqli_real_escape_string($db_conn,$date)
    );

    $result = mysqli_query($db_conn, $query);
    $resultCheck = mysqli_num_rows($result);
    $playlist = array();
    $playlist_date = false;

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            
            $playlist[] = array( $row['artist'] => $row['title'] );
            $playlist_date = test_input($row['date']);
        }
    }

    $playlist_html = false;
    foreach ($playlist as $index => $song) {

        foreach ($song as $artist => $title) {
            $playlist_html .= '<li>' . strtoupper($artist) . ' - ' . $title . '</li>';
        }
    }

    $result_array['success'] = true;
    $result_array['playlist_html'] = $playlist_html;
} else {

    $result_array['success'] = false;
}

header('Content-type: application/json');
echo json_encode($result_array);

?>