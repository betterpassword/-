<?php
	session_start();
	if(!isset($_SESSION['username'])){ 
	echo "<script>alert('没有登录禁止访问!');location.href='Login.php'</script>";
	}
?>
<!DOCTYPE html>
<html lang="zh">
<header>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Style.css" />	
	<style>
		img{
			width: 120px;
			height: 150px;
			margin-left: 70px;
			margin-top: 20px;
		}
		#box{
			margin: 0 auto;
		}
		a{
			text-decoration: none;
			text-align: center;			
		}
		p{
			margin-left: 70px;
		}
		#btn{			
			background: #FFFFFF;		
			border: none;
			cursor: pointer;			
		}
	</style>
</header>	
<body>
	<nav>
		<ul>
			<li><a href="Index.php">主 页</a></li>
			<li><a href="Register.php">用户注册</a></li>
			<li><a href="UserProfile.php">用户信息</a></li>
			<li><a href="Search.php">搜索</a></li>
			<li><a href='Logout.php'>注销</a></li>
			<li><a href='Login.php'>用户登录</a></li>
		</ul>
	<span id='welcome'>
	   <?php
	   	if(isset($_SESSION['username'])){
	   		echo $_SESSION['username'].";欢迎访问网上书城系统!";
	   	}else{
	   		echo "欢迎访问网上书城系统！";
	   	}
		?>
	</span>
	</nav>
	
	
		<!-- // session_start();
		// if(isset($_SESSION['username'])){
		// 	//echo "<script align="center">欢迎您,".$_SESSION['username']"."<br/>"</script>"
		// 	echo "欢迎您,".$_SESSION['username']."<br/>";
		// }else{
		// 	echo "<script>alert('没有登录禁止访问!')；location.href='Login.php'</script>";
		// }
		// require('conn.php');
		// $sql="select * from account where username='unsrname'";
		// $result=$db->query($sql); -->
		<?php 
			require_once('conn.php');
			
			// if(isset($_POST['submit'])){
				//修改用户信息
			// }
			$username=$_SESSION['username'];
			$sql="select * from account where username='$username'";
			$result=$db->query($sql);
			$row=$result->fetch(PDO::FETCH_ASSOC);
		?>
		
		
		 <form action="change.php" method="post">
		 <table align="center">
			 <h3 align="center">修改信息</h3>
			
				<tr>
					<td align="center">用&nbsp;&nbsp;户&nbsp;&nbsp;名:</td>
					<td><input type="text" name="username" value="<?=$row['username']?>" readonly="true">*用户名不可修改!</td>
				</tr>
				<tr>
					<td align="center">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:</td>
					<td><input type="text" name="password" value="<?=$row['password']?>"></td>
				</tr>	 
				<tr>	 
					<td align="center">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</td>
					<td><input type="text" name="cname" value="<?=$row['cname']?>"></td>
				</tr>	 
				<tr>	 
					<td align="center">城&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;市:</td>
					<td><input type="text" name="city" value="<?=$row['city']?>"></td>
				</tr>	 
				<tr>	 
					<td align="center">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址:</td>
					<td><input type="text" name="address" value="<?=$row['address']?>"></td>
				</tr>	 
				<tr>	 
					<td align="center">邮政编码:</td>
					<td><input type="text" name="zip" value="<?=$row['zip']?>"></td>
				</tr>	 
				<tr>	 
					<td align="center">联系方式:</td>
					<td><input type="text" name="phone" value="<?=$row['phone']?>"></td>
				</tr>	 
				<tr>	 
					<td align="center">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱:</td>					 
					<td><input type="text" name="email" value="<?=$row['email']?>"></td>
				</tr>	 
				<tr>
					<td colspan="2" align="center"><input style="margin-top: 20px;" type="submit" name="yes" value="确认修改"></td>					
				</tr>		
			</table>
			</form>
	<footer style="margin-top: 341px;">© 网上书城团队 2021</footer>
</body>
</html>