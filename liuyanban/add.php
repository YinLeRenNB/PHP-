<?php
	if(!isset($_COOKIE['uid'])){
		$arr=explode('/', $url=$_SERVER['REQUEST_URI']);
		$num=count($arr)-1;
		$newurl=$arr[$num];
		echo "<script>location:'login.php?url=$newurl'</script>";
	}
?>

<!--   控制代码   -->
<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$cid=$_POST['cid'];
		$uid=$_POST['uid'];
		// 1.拼写SQL语句       									 变量要用单引
		$sql="insert into blog(bid,title,time,content,cid,uid) values(null,'$title',now(),'$con','$cid','$uid')";

		// 2.SQL语句发送给Mysql(数据库)执行  ->  将string转化成resource(资源)类型
		$rs=mysqli_query($link,$sql);     //  数据库连接，SQL语句     ---> 返回的资源类型
		
		if($rs){
			echo "<script>alert('添加成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "<script>alert('添加失败')</script>";
			echo "<script>location='add.php'</script>";
		}


	}


?>



<!--   视图代码   -->


<meta charset="utf-8">
<form action="add.php" method="post">       
	标题：<input type="text" name="title">
	<select name="cid" id="">
		<?php 
			$sql="select * from catalog";
			$query=mysqli_query($link,$sql);
			while ($rs=mysqli_fetch_array($query)) {
		 ?>
		 <option value="<?php echo $rs['cid']?>">
		 	<?php echo $rs['cname'] ?>
		 </option>

		<?php } ?>
	</select>
	<br />
	内容：<textarea rows="5" cols="10" name="con"></textarea><br />
	<input type="submit" name="sub" value="添加">	


</form>