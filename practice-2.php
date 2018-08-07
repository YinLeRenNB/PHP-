<?php
	echo "<table width=500px align='center' border=1>";	
	echo "<caption><h3>100行10列隔行换色</h3></caption>";
	for($i=0;$i<100;$i++){
		if($i%2==0){
			$color = 'red';
		}else{
			$color = 'blue';
		}
		echo "<tr onmouseover=change(this) onmouseout=srow(this) bgColor=".$color.">";
		for($j=0;$j<10;$j++){
			echo "<td>";
			echo $j;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

<script>
	$color = ''
	function change(obj){
		$color = obj.bgColor;
		obj.bgColor = 'pink';
	}

	function srow(obj){
		obj.bgColor = $color;
	}
</script>>

