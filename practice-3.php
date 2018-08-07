<?php
	if(isset($GET_['sub'])){   // 如果点击计算按钮
		$num1=$_GET['num1'];
		$num2=$_GET['num2'];
		$ysf=$_GET['ysf'];
		$sum = 0;

		switch ($ysf) {
			case '+':
				$sum = $num1 + $num2;			
				break;
			case '-':
				$sum = $num1 - $num2;
				break;
			case 'X':
				$sum = $num1 * $num2;
				break;
			case '/':
				$sum = $num1 / $num2;
				break;
			case '%':
				$sum = $num1 % $num2;
				break;
		}
	}


?>




<meta charset="utf-8">
<table width="800px" align="center" border="1px">
<caption><h1>计算器</h1></caption>
<form action="practice-3.php" method="get"></form>
<tr>
	<td>
		<input type="text" name="num1">
	</td>
	<td>
	<select name="ysf" id="">
		<option value="+" <?php echo ($ysf=='+')?>>+</option>
		<option value="-">-</option>
		<option value="*">X</option>
		<option value="/">/</option>
		<option value="%">%</option>
	</select>	
	</td>
	<td>
		<input type="text" name="num2">
		<input type="submit" name="sub" value="计算">
	</td>
</tr>	
</table>


<?php

	if(isset($_GET['sub'])){
		echo "<tr>";
		echo "<td colspan='4'>"."$num1 $ysf $num2 = $sum "."</td>";
	}
?>