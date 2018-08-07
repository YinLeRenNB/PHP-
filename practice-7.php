<?php
echo "--------------------检测上传文件后缀---------------------";
	if(isset($_POST['sub'])){
		$sfile=$_POST['sfile'];
		$sname=$sfile['name'];
		$arr=explode('.',$sname);     // 对传过来的文件名 以 . 分割成数组形式
		$num=count($arr)-1;   // 取到生成数组的最后一个
		$hou=$arr[$num];
		$houarr=array('txt','pdf','exe');
		$flag=ture;
		for($i=0; $i<strlen($hou); $i++){
			for($j=0; $j<count($houarr); $j++){
				if($hou[$i]==$houarr[$j]){
					$flag=false;
				}
			}
		}

		if($flag==false){
			echo "<script>上传的文件格式非法</script>";
		}else{
			$oldurl=$sfile['tmp_name'];
			$newname=time().'.'.$hou;

			$newurl='./uploads/'.$newname;
			$a=move_uploaded_file($oldurl, $newurl);
			if($a){
				echo "success";
			}

		}


	}
	

?>
<meta charset="utf-8">
<form action="practice-7.php" method="post" enctype="multipart/form-data">      <!--enctype 对发回的文件处理的方式-->
	检测一个文件的后缀<br />
	<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
</form>

