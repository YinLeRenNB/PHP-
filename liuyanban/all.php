<?php 
	include "conn.php";

	if(isset($_GET['bid'])){
		$bid=$_GET['bid'];
		$sql="update blog set hits=hits+1 where bid='$bid'";
		$query=mysqli_query($link,$sql);
		if($query){
			$sql="select * from blog where bid='$bid'";
			$query=mysqli_query($link,$sql);
			$rs=mysqli_fetch_array($query);
		}
	}


 ?>


 <h3>标题：<?php echo $rs['title']?></h3>
 <li>时间：<?php echo $rs['time']?></li>
 <li>访问量：<?php echo $rs['hits']?></li>
 <p><?php echo $rs['content']?></p>

<hr />
<br />

<form action="all.php?bid=<?php echo $bid?>" method="post">
	<textarea name="pl" id="" cols="30" rows="10"></textarea><br />
	<input type="submit" name="sub" value="评论">
</form>

<?php 
	if(isset($_POST['sub'])){
		$plcon=$_POST['pl'];
		$uid=$_COOKIE['uid'];
		$bid=$_GET['bid'];

		$sql="insert into pl(plid,plcon,pltime,uid,bid) values(null,'$plcon',now(),'$uid','$bid')";
		$query=mysqli_query($link,$sql);

		if($query){
			header("location:all.php?bid='$bid'");
		}
	}
 ?>

 <hr />
 <br /> 

 <?php 
 	$sql="select * from pl";
	$query=mysqli_query($link,$sql);
	while ($rs=mysqli_fetch_array($query)) {

  ?>

  <p><?php echo $rs['plcon']?></p>
<br />

  <?php } ?>