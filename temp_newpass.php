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

<script>
    $("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	
	if($("#password1").val().length >= 8){
		$("#8char").removeClass("glyphicon-remove");
		$("#8char").addClass("glyphicon-ok");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("glyphicon-ok");
		$("#8char").addClass("glyphicon-remove");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("glyphicon-remove");
		$("#ucase").addClass("glyphicon-ok");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("glyphicon-ok");
		$("#ucase").addClass("glyphicon-remove");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("glyphicon-remove");
		$("#lcase").addClass("glyphicon-ok");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("glyphicon-ok");
		$("#lcase").addClass("glyphicon-remove");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("glyphicon-remove");
		$("#num").addClass("glyphicon-ok");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("glyphicon-ok");
		$("#num").addClass("glyphicon-remove");
		$("#num").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
});
</script>
<?php
echo $_SESSION['userID'];
include ('templates/scripts.html');
?>