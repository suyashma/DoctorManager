<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body onload="myFunction()">
	<div class="box">
		<form action="logindoc.php" method="post">
			<h2 >Doctor Login</h2>
			
			<!--<label>User Name</label>-->
			<input type="text" name="uname" placeholder="User Name" id="#dname"><br>

			<!--<label>User Name</label>-->
			<input type="password" name="password" placeholder="Password"><br>

			<button type="submit" onclick="myFunction2()">Login</button>
			<div class="errorstat">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
			</div>
			<a href="signup.php" class="gosignup" onclick="myFunction1()">Don't have an account?</a><br/>
			<a href="indexadm.php" class="gosignup" style='font-size:0.8em;margin-right:19vw'>Login as Admin?</a>
			<a href="indexpat.php" class="gosignup" style='font-size:0.8em;'>Login as Patient?</a>
		</form>
	</div>
	<script>
		function myFunction(){
			
			document.querySelector(".box").classList.add("box-tog");
		}
		function myFunction2(){
			
			$_SESSION['user_name']=document.querySelector("#dname").value;
			alert($_SESSION['user_name']);
		}
		/*function myFunction1(){
			document.querySelector(".box").classList.remove("box-tog");
			window.location.href = "signup.php";
		}*/
	</script>
</body>

</html>