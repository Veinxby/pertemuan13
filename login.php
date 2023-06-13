<?php
session_start();
error_reporting(1);
if($_SESSION['status'] == 'login'){
	header('Location:tampil_data.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>
	<?php 
			if (isset($_GET['pesan'])) {
				$pesan = $_GET['pesan'];
				if ($pesan == 'register berhasil') {
					echo '<script>
					if (confirm("Going to login page")) window.location = ".html";}
					</script>';
				}elseif ($pesan == 'pass incorrect') {
					echo '<script>
						alert("Konfirmasi password salah!!")
					</script>';
				}
			}
	?>

<div class="container">
	<div class="text">
		<img src="hai.png" alt="" width="70%">
		<h1>WELLCOME TO OUR WEBSITE</h1>
	</div>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="proses_signup.php" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="Input Username" required="">
					<input type="password" name="password" placeholder="Input Password" required="">
					<input type="password" name="password2" placeholder="Confirm Password" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login" id=""login>
				<form action="proses_login.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="Input Username" required="">
					<input type="password" name="password" placeholder="Input Password" required="">
					<button type="submit">Login</button>
					<button type="reset">Batal</button>
				</form>
			</div>
	</div>
</div>
</body>
</html>