<?php
session_start();
include('templates/head.html');
?>
<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="images/simbolologin.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="updatepwd.php" method="POST">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="password" name="password1" id="password1" class="input-lg form-control" autocomplete="off" placeholder="New Password" required autofocus>
            <input type="password" name="password2" id="password2" class="input-lg form-control" autocomplete="off" placeholder="Repeat Password" required>
            <input type="text" name="userID" value="<?php $_SESSION['userID']; ?>" hidden>
            <button class="btn btn-lg btn-primary btn-load btn-signin" data-loading-text="Changing Password..." type="submit">Change Password</button>
        </form>
    </div>
</div>


<?php
echo $_SESSION['userID'];
include('templates/scripts.html');
?>