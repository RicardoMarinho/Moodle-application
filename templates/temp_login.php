<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="images/simbolologin.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <?php session_start();
        if (isset($_SESSION['message']) && $_SESSION['message'] == "Login") { ?>
            <div class="alert alert-danger small" role="alert">
                Username ou Password inválidos!
        </div><?php unset($_SESSION['message']);
        } ?>
    <form class="form-signin" action="login.php" method="POST">
        <span id="reauth-email" class="reauth-email"></span>
        <input type="text" name="utilizador" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div id="remember" class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
    </form>
    <a href="recuperar.php" class="forgot-password">
        Forgot your password?
    </a>
</div>
</div>