<?php 
	$pdo = new PDO("mysql:host=localhost;dbname=cdglxt","root",""); 
	$loginname = $_POST['loginname'];
	$password = $_POST['password'];
	if($pdo -> exec("insert into cdglxt_user(loginname,password) values('{$loginname}','{$password}')")){ 
		echo "注册成功！"; 
	}else{
		echo '注册失败';
	}
?> 