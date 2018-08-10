<?php 
	include "conn.php";
	if(isset($_GET['bid'])){
		$bid=$_GET['bid'];
		$sql="delete from blog where bid='$bid'";
		$query=mysqli_query($link,$sql);
		if($query){
			header("location:index.php");
		}
	}	

 ?>