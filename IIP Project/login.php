<?php require_once("con.php"); ?>
<?php
$flag=true;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
	header("location: complain.php");
	exit;
}
if (isset($_POST['submit'])) {
	extract($_POST);
	$flag=false;
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass' ";
	$result = mysqli_query($conn, $sql);
	$num=mysqli_num_rows($result);


	if ($num==1) {
		$check = mysqli_fetch_assoc($result);
		$flag=true;
		session_start();
		$_SESSION['loggedin']=true;
		$_SESSION['uid']=$check['uid'];
		$_SESSION['email']=$check['email'];
		//echo $_SESSION['email'];
		header('Location: complain.php');
	} 
}
?>
<html>

<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="login-wrap">
		<div class="login-html">

		<?php
		if(!$flag){
			echo'
		<div class = "container" style ="margin-top: 10px; ">
				<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="alert alert-danger" role="alert" style = "text-align: center">
				  Invalid Credentials !!
				</div>
		  </div>
		</div>';
		}
		?>


			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">


				<form name="frm2" method="post" action="login.php">

					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="user">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="pass">
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" class="button" value="Sign In" name="submit">
						</div>


						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
					</div>
				</form>

				<form name="frm" method="post" action="post.php">
					<div class="sign-up-htm">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" class="input" name="user">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" class="input" data-type="password" name="pass">
						</div>
						<div class="group">
							<label for="pass" class="label">Repeat Password</label>
							<input id="pass" type="password" class="input" data-type="password">
						</div>
						<div class="group">
							<label for="email" class="label">Email Address</label>
							<input id="email" type="text" class="input" name="email">
						</div>
						<div class="group">
							<input type="submit" class="button" name="submit" value="Sign Up">
						</div>

						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already Member?</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>