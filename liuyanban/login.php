<?php
	include "conn.php";


	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$mpass=md5($pass);
		$url=$_POST['hname'];
		$sql="select * from user where uname='$uname' and pass='$mpass'";
		$query=mysqli_query($link,$sql);
		$rs=mysqli_fetch_array($query);
		if($rs){
			//设置cookie
			setcookie('name',$rs['uname']);
			setcookie('uid',$rs['uid']);
			if(empty($url)){
				echo "<script>location='index.php'</script>";
			}else{
				echo "<script>location='$url'</script>";
			}
		}else{
			header('location:login.php');
		}

	}


?>

<meta charset="utf-8">
<form action="login.php" method="post">
	<input type="hidden" name="hname" value=<?php echo $_GET['url']?$_GET['url']:'';?>>
	用户名:<input type="text" name="uname"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录"> 
</form>
