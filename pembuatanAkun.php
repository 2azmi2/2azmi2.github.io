<!DOCTYPE HTML>
<html>
	<head>
		<title>Form Pembuatan Akun</title>
		<link rel="stylesheet" type="text/css" href="StyleForm.css">
		<script src='jquery-3.6.0.js'></script>
		<script>
			var i=0;
			$(document).ready(function(){
				$('.slider img').hide();
				showNextImage();
				setInterval('showNextImage()', 3500);
			});

			function showNextImage(){
				i++;
				$('.g'+i).appendTo('.slider').fadeIn(1100).delay(1100).fadeOut(1100);
				if(i==4){
					i=0;
				}
			};
		</script>
	</head>
	<body>
		<div class="slider">
			<img class="g1" src="img/bg1.jpg">
			<div class="lembar">
				<table>
					<form method="GET" action="insert3.php">
						<h1>FORM PEMBUATAN AKUN</h1>
						<tr>
							<td>ID  </td>
							<td><input type="text" name="id" size="50"></td>
						</tr>
						<tr>
							<td>Username </td>
							<td><input type="text" name="username" size="50"></td>
						</tr>
						<tr>
							<td>Password  </td>
							<td><input type="text" name="password" size="50"></td>
						</tr>
						<tr>
							<td>Level  </td>
							<td><input type="text" name="level" size="50"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" name="log" value="Kirim">
							<input type="submit" name="log" value="Logout">
							<input type="submit" name="back" value="Kembali"></td>
						</tr>
					</form>
				</table>
			</div>
			<img class="g2" src="img/bg2.jpg">
			<img class="g3" src="img/bg3.jpg">
			<img class="g4" src="img/bg4.jpg">
		</div>
	</body>
</html>