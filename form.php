<!DOCTYPE HTML>
<html>
	<head>
		<title>Form Mahasiswa Baru</title>
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
					<form method="GET" action="insert.php">
						<h1>FORM PENDAFTARAN</h1>
						<tr>
							<td>Nomor UN  </td>
							<td><input type="text" name="un" size="50"></td>
						</tr>
						<tr>
							<td>Nama Lengkap </td>
							<td><input type="text" name="nama" size="50"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin  </td>
									<td><select name="gender" size="1">
											<option value="Pria">Pria
											<option value="Wanita">Wanita
										</select>
									</td>
						</tr>
						<tr>
							<td>Tempat/Tanggal Lahir  </td>
							<td><input type="text" name="ttl" size="50"></td>
						</tr>
						<tr>
							<td>Nama Orangtua/Wali  </td>
							<td><input type="text" name="ortu" size="50"></textarea></td>
						</tr>
						<tr>
							<td>Alamat  </td>
							<td><textarea name="alamat" rows="5" cols="30"></textarea></td>
						</tr>
						<tr>
							<td>Kota/Kabupaten  </td>
							<td><input type="text" name="kota" size="50"></textarea></td>
						</tr>
						<tr>
							<td>Asal Sekolah  </td>
							<td><input type="text" name="sekolah" size="50"></textarea></td>
						</tr>
						<tr>
							<td>Agama  </td>
							<td><input type="text" name="agama" size="50"></textarea></td>
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