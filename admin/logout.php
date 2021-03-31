<?php
	session_start();
	//hapus session yang sudah di set
	unset($_SESSION['id']);
	unset($_SESSION['username']);

	
	echo "<script>
			document.location='index.php';
		  </script>";
?>