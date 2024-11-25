<?php
    require_once('includes/global_variables.php');
    require_once('includes/db_conn.php');
    include_once('includes/analyticstracking.php');
    require_once('includes/head.php');
    include_once('pages/login.php');
?>

<body>
    <div class="page-wrapper">
        <section class="login">
            <div class="container-500">
                <div class="login-container">
                    <p>
                        <a href="<?= SITE_URL; ?>" title="NIGHT home"><img class="login-logo" src="<?= IMG_PATH; ?>/night_logo_silver.svg" /></a>
                    </p>
                    <p>ADMIN LOGIN</p>
                    <form id="login-form" role="form" method="post">
                        <p><input class="form-control text-input" type="password" name="password" placeholder="Password" /></p>
                        <button class="btn btn-light btn-block" type="submit" name="login">Login</button>
                    </form>
                </div>
                <div class="red-text">
                    <?php if($error_msg): ?>
                        <p><?= $error_msg; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>

</body>
</html>