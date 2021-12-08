<html>
	<head>
	</head>
	<body>
		<?php
			include "koneksi.php";
			
			$id = $_GET['id'];
			$username = $_GET['username'];
			$password = $_GET['password'];
			$level = $_GET['level'];
			$keluar = $_GET['log'];
			if($keluar == ''){
				$balik = $_GET['back'];
			}
			
			$sql = "INSERT INTO TugasWebMinggu13AZMI(id, username, password, level)
					VALUE('$id','$username',MD5('$password'),'$level')";
			if($keluar == 'Logout'){
				echo "Berhasil Logout";?>
				<a href="index.html">Login Kembali</a><?php
			}
			else if($balik == 'Kembali'){
				?><a href="HomeAdmin.html">Menuju Home</a>
				<?php
			}
			else if(mysqli_query($connect, $sql)){
				echo "Record berhasil dibuat";?>
				<a href="pembuatanAkun.php">Back</a>
				<?php
			}
			else{
				echo "Record gagal dibuat <br>" . mysqli_error($connect);
			}
			
			mysqli_close($connect);
		?>
	</body>
</html>