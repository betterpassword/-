<?php 
	session_start();
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
	    		echo "xxx欢迎访问网上书城系统！";
	    	}
	    ?>
	</span>
	</nav>
	<div>
			<table id="box">
				<tr>
					<form action="wx.php" method="post"><td><a href="wx.php"><img src="Images/wx.jpg"><p><input type="button" id="btn" name="wx" value="文学类"></button></p></a></td></form>
					<td><a href="jj.php"><img src="Images/jj.jpg"><p><button id="btn">经济类</button></p></a></td>
					<td><a href="IT.php"><img src="Images/it.jpg"><p><button id="btn">IT类</button></p></a></td>
					<td><a href="xs.php"><img src="Images/xs.jpg"><p><button id="btn">小说类</button></p></a></td>
				</tr>
				<tr>				
					<td><a href="jy.php"><img src="Images/jy.jpg"><p><button id="btn">教育类</button></p></a></td>
				</tr>
			</table>
		</div>	
		
<footer style="margin-top: 132px;">© 网上书城团队 2021</footer>
</body>
</html>