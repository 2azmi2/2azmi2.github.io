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
			
			$sql = "CREATE TABLE TugasWebMinggu13AZMI(
					id int (100) PRIMARY KEY AUTO_INCREMENT,
					username VARCHAR (50) NOT NULL,
					password VARCHAR (50) NOT NULL,
					level VARCHAR (5) NOT NULL)";
			
			if(mysqli_query($connect, $sql)){
				echo "Tabel TugasWebMinggu13AZMI berhasil dibuat";
			}
			else{
				echo "Tabel TugasWebMinggu13AZMI gagal dibuat <br>" . mysqli_error($connect);
			}
			
			mysqli_close($connect);
		?>
	</body>
</html>