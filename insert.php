<html>
	<head>
	</head>
	<body>
		<?php
			include "koneksi.php";
			
			$un = $_GET['un'];
			$nama = $_GET['nama'];
			$gender = $_GET['gender'];
			$ttl = $_GET['ttl'];
			$ortu = $_GET['ortu'];
			$alamat = $_GET['alamat'];
			$kota = $_GET['kota'];
			$sekolah = $_GET['sekolah'];
			$agama = $_GET['agama'];
			$keluar = $_GET['log'];
			if($keluar == ''){
				$balik = $_GET['back'];
			}
			
			$sql = "INSERT INTO TugasWebMinggu12AZMI(un, nama, gender, ttl, ortu, alamat, kota, sekolah, agama)
					VALUE('$un','$nama','$gender','$ttl','$ortu','$alamat','$kota','$sekolah','$agama')";
			
			if($keluar == 'Logout'){
				echo "Berhasil Logout";?>
				<a href="index.html">Login Kembali</a><?php
			}
			else if($balik == 'Kembali'){
				?><a href="HomeUser.html">Menuju Home</a>
				<?php
			}
			else if(mysqli_query($connect, $sql)){
				echo "Record berhasil dibuat";?>
				<a href="form.php">Daftar Lain</a>
				<?php
			}
			else{
				echo "Record gagal dibuat <br>" . mysqli_error($connect);
			}
			
			mysqli_close($connect);
		?>
	</body>
</html>