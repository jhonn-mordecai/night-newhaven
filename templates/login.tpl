<div class="container h-100">
    <div class="row d-flex h-100 align-items-center justify-content-center">
        <div class="col-md-6 col-align-center">
            <div class="login-container text-center">
                <p>
                    <a href="{$SITE_URL}"><img class="login-logo" src="{$IMG_PATH}/night_logo_silver.svg" /></a>
                </p>
                <p>ADMIN LOGIN</p>
                <form id="login-form" role="form" method="post">
                    <p><input class="form-control text-input" type="password" name="password" placeholder="Password" style="background-color:#181818;color:#cccccc;border-color:black;" /></p>
                    <button class="btn btn-light btn-block" type="submit" name="login">Login</button>
                </form>
            </div>
            <div class="red-text text-center">
            {if $error_msg} {$error_msg} {else} &nbsp; {/if}
            </div>
        </div>
    </div>
</div>