<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
</head>
<body>
	<?php
		require('conn.php');
		$username=strip_tags(substr($_POST['username'],0,32));
		$password=strip_tags(substr($_POST['password'],0,32));
		$cname=strip_tags(substr($_POST['name'],0,32));
		$city=strip_tags(substr($_POST['city'],0,32));
		$address=strip_tags(substr($_POST['add'],0,32));
		$zip=strip_tags(substr($_POST['zip'],0,32));
		$phone=strip_tags(substr($_POST['tel'],0,32));
		$email=strip_tags(substr($_POST['email'],0,32));
		$crptpw=crypt(md5($password),md5($username));//将用户提交的密码进行加密
		//echo $crptpw;
		$sql="select * from account where username='$username'";
		$result=$db->query($sql);         //查询用户名是否被注册
		if($result->rowCount()>0){
		echo"<script>alert('该用户名以被注册，请更换!');history.go(-1)</script>";
		exit();}
		$sql="insert into account(username,password,cname,city,address,zip,phone,email) values
									 ('$username','$crptpw','$cname','$city','$address','$zip','$phone','$email')";
			
		$affected=$db->exec($sql);    //将用户注册信息插入accouent表中
		if($affected==1){
		echo "<script>alert('注册成功');location.href='Login.php'</script>";
		exit();}
	?>
</body>
</html>