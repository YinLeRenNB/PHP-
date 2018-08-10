<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$header=$_FILES['header'];

		/*
		array(5) { ["name"]=> string(23) "11216943431d69da26o.jpg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(24) "C:\xampp\tmp\php53BE.tmp" ["error"]=> int(0) ["size"]=> int(144955) }*/

		$flag=true;
		$arr=array('%','=','&');
		for($i=0;$i<strlen($uname);$i++){
			for($j=0;$j<count($arr);$j++){
				if($uname[$i]==$arr[$j]){
					$flag=false;
				}
			}
		}

		if($flag==false){
			echo "<script>alert('注册名非法')</script>";
			echo "<script>location='reg.php'</script>";
		}else{
			//验证是否重名
			$sql="select * from user where uname='$uname'";
			$query=mysqli_query($link,$sql);
			$rs=mysqli_fetch_array($query);
			if($rs){
				echo "<script>alert('注册名重名')</script>";
				echo "<script>location='reg.php'</script>";
			}else{
				$mpass=md5($pass);

				$arr=explode('.',$header['name']);
				$num=count($arr)-1;
				$hou=$arr[$num];
				$newname=$uname.time().'.'.$hou;
				$url='./uploads/'.$newname;
				
				$a=move_uploaded_file($header['tmp_name'],$url);
				if($a){
					$headerurl=substr($url,1);

					$sql="insert into user(uid,uname,pass,header) values(null,'$uname','$mpass','$headerurl')";
					$query=mysqli_query($link,$sql);
					if($query){
						header("location:login.php");
					}
				}else{
					echo "<script>alert('上传头像失败')</script>";
					echo "<script>location='reg.php'</script>";
				}


				
			}
		}
	}


?>

 <meta charset="utf-8">
 <form action="reg.php" method="post" enctype="multipart/form-data">
 	用户名：<input type="text" name="uname"><br />
 	密码：<input type="password" name="pass"><br />
 	上传头像：<input type="file" name="header"><br />
 	<input type="submit" name="sub" value="注册">

 </form>