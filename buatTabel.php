<html>
	<head>
	</head>
	<body>
		<?php
			$namaHost = "localhost";
			$username = "root";
			$password = "";
			$database = "TugasWebMinggu12AZMI";
			
			$connect = mysqli_connect($namaHost, $username, $password, $database);
			
			if($connect){
				echo "Koneksi dengan MySQL berhasil <br>";
			}
			else{
				echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
			}
			
			$sql = "CREATE TABLE TugasWebMinggu12AZMI(
					un VARCHAR (100) PRIMARY KEY,
					nama VARCHAR(100) NOT NULL,
					gender VARCHAR (100) NOT NULL,
					ttl VARCHAR (100) NOT NULL,
					ortu VARCHAR (100) NOT NULL,
					alamat VARCHAR(100) NOT NULL,
					kota VARCHAR(100) NOT NULL,
					sekolah VARCHAR(100) NOT NULL,
					agama VARCHAR (100) NOT NULL)";
			
			if(mysqli_query($connect, $sql)){
				echo "Tabel TugasWebMinggu12AZMI berhasil dibuat";
			}
			else{
				echo "Tabel TugasWebMinggu12AZMI gagal dibuat <br>" . mysqli_error($connect);
			}
			
			mysqli_close($connect);
		?>
	</body>
</html>