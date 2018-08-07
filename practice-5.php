<!-- <?php
echo "<table border=1>";
	for($i=1; $i<=9; $i++){
		echo "<tr>";
		for($j=1; $j<=$i; $j++){
			echo "<td>";
			echo "$i &times $j = ".($i*$j)."&nbsp;&nbsp;";
			echo "</td>";
		}
	echo "</tr>";

	}
	echo "</table>";
?>  -->



<!-- <?php
echo "<table border=1>";
	for($i=9; $i>=1; $i--){
		echo "<tr>";
		for($j=1; $j<=$i; $j++){
			echo "<td>";
			echo "$i &times $j = ".($i*$j)."&nbsp;&nbsp;";
			echo "</td>";
		}
	echo "</tr>";

	}
	echo "</table>";

?> -->


<?php
echo "<table border=1>";
	for($i=9; $i>=1; $i--){
		//先打空格
		echo "<tr>";
		for($j=1;$j<=9-$i;$j++){
			echo "<td>";			
			echo "&nbsp;";
			echo "</td>";

		}
		//再打算式
		for($k=1;$k<=$i;$k++){
			echo "<td>";			
			echo "$i &times $k = ".($i*$k)."&nbsp;&nbsp;";
			echo "</td>";
		}
	}
	echo "</tr>";
	echo "</table>";
?>