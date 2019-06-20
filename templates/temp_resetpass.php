<div class="container">
    <div class="card card-container">
        <div class="text-center">
            <h3><i class="fa fa-lock fa-4x"></i></h3>
            <h2 class="text-center">Forgot Password?</h2>
            <p>You can reset your password here.</p>
            <div class="panel-body">
                <?php session_start();
                if (isset($_SESSION['message']) && $_SESSION['message'] == "Email") { ?>
                    <div class="alert alert-danger small" role="alert">
                        Email inválido!
                    </div><?php unset($_SESSION['message']);
                        } ?>
                <form id="register-form" action="reset.php" role="form" autocomplete="off" class="form" method="post">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="email" name="email" placeholder="email address" class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block btn-signin" value="Reset Password" type="submit">
                    </div>

                    <input type="hidden" class="hide" name="token" id="token" value="">
                </form>

            </div>
        </div>
    </div>
</div>