<meta charset="utf-8">
<?php 
	require('conn.php');
	$username=strip_tags(substr($_POST['username'],0,32));
	$password=strip_tags(substr($_POST['password'],0,32));
	$cname=strip_tags(substr($_POST['cname'],0,32));
	$city=strip_tags(substr($_POST['city'],0,32));
	$address=strip_tags(substr($_POST['address'],0,32));
	$zip=strip_tags(substr($_POST['zip'],0,32));
	$phone=strip_tags(substr($_POST['phone'],0,32));
	$email=strip_tags(substr($_POST['email'],0,32));
	$crptpw=crypt(md5($password),md5($username));
	$sql="Update account Set password='$crptpw',cname='$cname',city='$city',zip='$zip',phone='$phone',email='$email'
			where username='$username'";
			$result= $db->query($sql) or die('执行失败');
			//echo $sql;			
			echo 
			"<script>alert('信息修改成功!');location.href='index.php';</script>";
?>