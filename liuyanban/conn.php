<?php
	//创建数据连接:          地址     用户名   密码  
	$link=@mysqli_connect('localhost','root','') or die('打开数据库连接失败');
	//选择数据库:  	数据库连接   数据库名字
	@mysqli_select_db($link,'ylb') or die('数据库选择失败');
	//设置数据库传输编码:  
	@mysqli_set_charset($link,'UTF8');

	//  @  过滤容错     or die  逻辑运算输入失败


	//php 引入文件  include  include_once   require    大多数采用include
?>