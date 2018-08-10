<?php 
	include "conn.php";
	if(isset($_POST['sub'])){
		$acata=$_POST['acatalog'];
		$sql="insert into catalog(cid,cname) values(null,'$acata')";
		$query=mysqli_query($link,$sql);
		if($query){
			header("location:add.php");
		}
	}

 ?>


 <form action="addcatalog.php" method="post">
 	添加分类：<input type="text" name="acatalog">
 	<input type="submit" name="sub" value="添加分类">


 </form>