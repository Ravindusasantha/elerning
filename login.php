<?php include_once "header.php" ?>
<section>
<div class="container-fluied login-bg p-t-75 p-b-50" style="background-image: url(img/image9.jpg);">
	<div class="row p-l-r-10" id="signin">
	<div class="card card-log text-white bg-dark col-md-4" >
                <div class="card-header">
                	<h3>SIGN IN</h3>
                	<div class="loginlogo">
                		<span><i class="fa fa-facebook-square"></i></span>
					<span><i class="fa fa-google-plus-square"></i></span>
					<span><i class="fa fa-twitter-square"></i></span>
                	</div>
                </div>
                <div class="card-body"  >
                  <form action="ppr.php" method="POST" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"  style="font-size: 20px;"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-size: 20px;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn btn-yellow">
					</div>
				</form>
                </div>
                <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#" id="up">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#" >Forgot your password?</a>
				</div>
			</div>
              </div>
             </div>

             
             <div class="contact__msg col-md-4" style="color: white;text-align: center;padding: 10px;width: 40%;margin: 0 auto;font-size: 20px; font-weight: 500">
                 
                  </div>
   <div class="row p-l-r-10 " id="signup">
	<div class="card card-log text-white bg-dark col-md-4">
                <div class="card-header">
                	<h3>SIGN UP</h3>
                	<!-- <div >
                	<span><i class="fa fa-facebook-square"></i></span>
					<span><i class="fa fa-google-plus-square"></i></span>
					<span><i class="fa fa-twitter-square"></i></span>
                	</div> -->
                </div>
                <div class="card-body">
                  <form action="reg.php" method="POST" id="contact__form2" class="contact__form">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"  style="font-size: 20px;"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="First Name" name="reg_fname">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" style="font-size: 20px;"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Last Name" name="reg_lname">
					</div>
					<!-- <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-id-card" style="font-size: 20px;"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Age" name="age">
					</div> -->

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope" style="font-size: 20px;"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Email" name="reg_email">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-size: 20px;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="reg_password">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key" style="font-size: 20px;"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="re-password" name="reg_re-password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="SignUp" class="btn float-right login_btn btn-yellow">
					</div>
				</form>
                </div>
                <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#" id="in">Sign In</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
              </div>
             </div>
             
</div>

<script>
$(document).ready(function(){
  $("#up").click(function(){
    $("#signin").hide();
    $("#signup").show();
  });
  $("#in").click(function(){
    $("#signup").hide();
    $("#signin").show();
  });
});
</script>
</section>



<?php include_once "footer.php" ?>