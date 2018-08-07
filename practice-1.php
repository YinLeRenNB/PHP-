<?php
	echo "判别是否为闰年";
	echo "<br />";

	if(isset($_POST['sub'])){
		$year = $_POST['year'];
		if(is_numeric($year)){
			if($year % 400 ==0 or ($year % 4 == 0 and $year % 100 != 0)){
				echo $year."是闰年";
			}else {
				echo $year."不是闰年";
			}
		}else{
			echo "<script>alert('请输入纯数字')</script>";
		}
	
	}
		

?>


<meta charset="utf-8">
<form action="practice-1.php" method="post">
	year:<input type="text" name="year">
	<input type="submit" name="sub" value="判断闰年">
</form>
