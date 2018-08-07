<?php
echo "------------------------生成5个不重复的随机数 从0到9--------------------------";
echo "<br />";



$arr = array();
while(count($arr)<5){
	$arr[]=rand(0,9);
	$arr = array_unique($arr);
}
foreach ($arr as $v) {
	echo "$v";
}




echo "<br />";
?>

<?php
echo "--------------------------转换数组为字符串--------------------------";
echo "<br />";

if(isset($_POST['sub'])){

	$title=$_POST['title'];
	$content=$_POST['content'];
	$date=$_POST['date'];
	$arr = array($title,$content,$date);

	echo implode(',', $arr);
}



?>

<meta charset="utf-8">
<caption>请输入标题内容和日期</caption>

<form action="practice-8.php" method="post">
	新闻标题:<input type="text" name="title"><br />
	新闻内容:<input type="text" name="content"><br />
	新闻日期:<input type="text" name="date"><br />
	<input type="submit" name="sub" value="提交"><br />

</form>

<?php  echo "<br />"; ?>




<?php
echo "-----------------------------福利彩票------------------------------";
echo "<br />";





?>


<meta charset="utf-8">

<?php
	for($i=1;$i<=5;$i++){
		//先打空格
		for($j=1;$j<5-$i;$j++){
			echo "&nbsp;";
		}
		
		//再打星
		for($k=1;$k<=2*$i-1;$k++){
			echo "*";
		}
		echo "<br />";
	}
	
	echo "<br />";
	for($i=1;$i<=5;$i++){
		//先打空格
		for($j=1;$j<5-$i;$j++){
			echo "&nbsp;";
		}
		
		//再打星和空格
		for($k=1;$k<=2*$i-1;$k++){
			if($i==1 || $i==5){
				echo "*";
			}else{
				if($k==1 || $k==2*$i-1){
					echo "*";
				}else{
					echo "&nbsp;";
				}
			}
		}
		echo "<br />";
	}
	


?>