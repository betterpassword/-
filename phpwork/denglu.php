<meta charset="utf-8" />
<?php 
			session_start();
			require('conn.php');							
				if(isset($_POST["sub"])){					
				$username = strip_tags(substr($_POST['username'],0,32));
				$password = strip_tags(substr($_POST['password'],0,32));
				//$username2=$_POST['username'];
				
				
				if($_SESSION['username']=="username"){
				//    echo "您未登陆！";
				// }else{
				   echo "您已登陆！";
				}
				
				
				
				$crptpw=crypt(md5($password),md5($username));				
				if($username == null || $password == null){
					echo "<script>alert('用户名和密码不能为空');history.go(-1)</script>";
					exit;
				}					
					$sql = "select * from account where username = '$username' and password = '$crptpw'";					
					$result= $db->query($sql);	
					if($result->rowCount()==0){
				//未注册跳转注册界面
					unset($_SESSION['username']);						
					echo "<script>alert('密码错误或者您还未注册!');parent.location.href='Login.php'</script>";
					//echo 1;
					exit();
				}else{
				//用户名密码正确
					$row=$result->fetch(1);
					$_SESSION['username']=$$row['username'];  //存入session
					//echo 2;
					echo "<script>alert('登陆成功');location.href='index.php'</script>";
					}
				}			
				if(isset($_POST["btn"])){
				echo "<script>location.href='Register.php'</script>";
			}
			// if(isset($_POST["sub"])){
			// if(isset($_SESSION["username"])){
			// 	echo "您已登录!";
			// }
			// }
			// // if(isset($_SESSION['username'])){
			// // 	echo $_SESSION['username'].";欢迎访问网上书城系统!";
			// // }else{
			// // 	echo "欢迎访问网上书城系统！";
			// // }
?>