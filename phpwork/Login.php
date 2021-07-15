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
		欢迎访问网上书城系统！
	</span>
	</nav>
			
			<form action = "denglu.php" method = "post">
				<div style="width: 400px;height: 200px;border:1px skyblue solid; margin: 0 auto; margin-top: 100px; background: skyblue;">
				<table align="center">
					<h2 align="center"  style="margin-top: 30px; margin-left: 20px;">用户登录</h2>
					
					<tr>
						<td>用户名:</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>密&nbsp;&nbsp;&nbsp;码:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr></tr><tr></tr>
					<tr>
						<td></td>
						<td>&nbsp;&nbsp;&nbsp;<input type="submit" value="登录" name="sub">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" value="注册" name="btn"></td>
					</tr>
					
				</table>
				</div>
			</form>		
		<footer style="margin-top: 295px;">© 网上书城团队 2021</footer>
</body>
</html>

