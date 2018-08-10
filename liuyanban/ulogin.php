<?php 
	if(isset($_COOKIE['uid'])){
		setcookie('name','');
		setcookie('uid','');
		echo "<script>location='login.php'</script>";
	}



?>