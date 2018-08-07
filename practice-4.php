<?php
echo "------------------------for方法-----------------------";
	for($i=1; $i<=9; $i++){
		echo "<br>";
		for($j=1; $j<=$i; $j++){
			echo "$i &times; $j = ".($i*$j)." &nbsp;&nbsp;";
		}
	}
?>


<?php
echo "------------------------while方法-----------------------";
 echo "<br />";
	$i=1;
	while($i<=9){
		$j=1;
		while($j<=$i){
			echo "$i &times $j = ".($j*$i)."";
			$j++;
			echo "&nbsp; &nbsp;";
		}
		$i++;
		echo "<br />";
	}
?>


<?php
echo "------------------------do-while方法-----------------------";

echo "<br />";
$i=1;
do{
	$j=1;
	do{
		echo "$i &times $j = ".($j*$i)."";
		$j++;
	}while($j<=$i);
		$i++;
		echo "<br />";
}while($i<=9);

?>
