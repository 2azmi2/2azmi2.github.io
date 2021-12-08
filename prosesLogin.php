<?php
	include "koneksi.php";
	
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$query="SELECT * FROM TugasWebMinggu13AZMI WHERE username='$username' and password='$password'";
	$result=mysqli_query($connect,$query);
	$row = mysqli_fetch_assoc($result);
	
	if($row['level']==1){
		echo "Anda berhasil login sebagai admin. silahkan menuju ";?>
		<a href="HomeAdmin.html">Halaman Pembuatan Akun</a>
		<?php
	}else if($row['level']==2){
		echo "Anda berhasil login sebagai user. silahkan menuju ";?>
		<a href="HomeUser.html">Halaman Pendaftaran</a>
		<?php
	}else{
		echo "Anda gagal login. silahkan ";?>
		<a href="index.html">Login Kembali</a>
		<?php
		echo mysqli_error($connect);
	}
?>