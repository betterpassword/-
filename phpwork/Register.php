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
	<form method="post" action="RegisterData.php">
		<div>
		<table align="center">
			<h3 align="center">用户注册</h3>
			<tr>
				<td>用&nbsp;&nbsp;户&nbsp;&nbsp;名:</td>
				<td><input type="text" name="username" placeholder="请输入用户名"></td>
			</tr>
			<tr>
				<td>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:</td>
				<td><input type="password" name="password" ></td>
			</tr>
			<tr>
				<td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>城&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;市:</td>
				<td><select name="city">					
					<option value="武汉">武汉</option>
					<option value="北京">北京</option>
					<option value="上海">上海</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址:</td>
				<td><input type="text" name="add"></td>
			</tr>
			<tr>
				<td>邮政编码:</td>
				<td><input type="text" name="zip"></td>
			</tr>
			<tr>
				<td>联系方式:</td>
				<td><input type="text" name="tel" placeholder="请输入手机号码"></td>
			</tr>
			<tr>
				<td>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="注册">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="button" onclick="javascript:location.reload()" value="重置"></td>
			</tr>
		</table>
		</div>
	</form>
	<footer style="margin-top: 290px;">© 网上书城团队 2021</footer>
</body>
</html>