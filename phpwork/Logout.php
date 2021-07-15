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
			// if(isset($_SESSION['username'])){
			// 	session_start();
			// 	setcookie("username","",time()-60);
			// 	session_unset();
			// 	session_destroy();
			// 	echo "<script>alert('注销成功!');location.href='Login.php'</script>";
			// 	}
			session_start();
			
			if(isset($_SESSION['username'])){
				// setcookie(session-name(),session-id(),time()-10);
				session_unset();
				session_destroy();
			}
			// session_destroy();
			echo "<script>alert('注销成功!');location.href='Login.php'</script>";
		?>
</body>
</html>