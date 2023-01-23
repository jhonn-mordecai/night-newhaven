<section class="login">
    <div class="container-500">
        <div class="login-container">
            <p>
                <a href="{$SITE_URL}"><img class="login-logo" src="{$IMG_PATH}/night_logo_silver.svg" /></a>
            </p>
            <p>ADMIN LOGIN</p>
            <form id="login-form" role="form" method="post">
                <p><input class="form-control text-input" type="password" name="password" placeholder="Password" style="background-color:#181818;color:#cccccc;border-color:black;" /></p>
                <button class="btn btn-light btn-block" type="submit" name="login">Login</button>
            </form>
        </div>
        <div class="red-text">
        {if $error_msg} {$error_msg} {else} &nbsp; {/if}
        </div>
    </div>
</section>