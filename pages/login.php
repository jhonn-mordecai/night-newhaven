<?php

ob_start();
session_start();

//$validUser = $_SESSION['login'] === true;
$validUser = false;
$user = 'admin';
$password_hash = false;
$error_msg = "";
$user_pass = false;
if (isset($_POST['password'])) {
    $user_pass = $_POST['password'];
}

//Get password from DB
$query = sprintf("
    SELECT * FROM passwords
    WHERE user = '%s'
    ",
    $user
);

$result = mysqli_query($db_conn, $query);
$passResult = mysqli_num_rows($result);

if ($passResult) {
	while ($row = mysqli_fetch_assoc($result)) {

        $password_hash = $row['hash'];
	}
} 

mysqli_close($db_conn);


if (isset($_POST['login'])) {

    $validUser = password_verify($user_pass, $password_hash);

    if (!$validUser) {

        if (empty($user_pass)) {

            $error_msg = "Please enter a password";
        } else {

            $error_msg = "Invalid password";
        }
    } else {

        $_SESSION['login'] = true;
        header("Location: ". SITE_URL ."/admin.php");
    }
}

?>