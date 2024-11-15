<?php
    require_once('includes/global_variables.php');
    include_once('includes/analyticstracking.php');
    require_once('includes/head.php');
?>

<body>
    <section class="page-not-found">
        <div class="container-950">
            <div class="oops-info">
                <p>
                    <a href="<?= SITE_URL; ?>" title="NIGHT home"><img class="oops-logo" src="<?= IMG_PATH; ?>/night_logo_silver.svg" /></a>
                </p>
                <h2>That page doesn't exist.</h2>							
                <p>No need for existential crisis though. You probably just spilled blood on the keys.</p>

                <div class="back-home">
                    <a class="btn btn-lg btn-goth-red" href="{$SITE_URL}"><i class="fa fa-angle-double-left" aria-hidden="true"></i> NIGHT</a>
                </div>
            </div>				
        </div>
    </section>	

    <?php require_once('includes/footer.php'); ?>
    <?php require_once('includes/bottom_matter.php'); ?>
</body>
</html>