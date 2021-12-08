<html>
	<head>
	</head>
	<body>
		<?php
			include "koneksi.php";
			
			$sql = "INSERT INTO TugasWebMinggu13AZMI(id, username, password, level)
					VALUE('1','muhammad azmi',MD5('12345'),'2')";
			
			if(mysqli_query($connect, $sql)){
				echo "Record berhasil dibuat";
			}
			else{
				echo "Record gagal dibuat <br>" . mysqli_error($connect);
			}
			
			mysqli_close($connect);
		?>
	</body>
</html>