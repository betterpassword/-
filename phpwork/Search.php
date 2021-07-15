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
		if(isset($_GET['page']) && (int)$_GET['page']>0)
			$Page=$_GET['page'];
			else
			$Page=1;
			$PageSize=1;
			if(isset($_GET['keyword']))
			$keyword=trim($_GET['keyword']);
			else $keyword="";
			$sql="select * from category";
			if($keyword <> "")
			$sql=$sql." where descn like '%$keyword%'";
			//echo $sql;
			$result=$db->query($sql);		
			$RecordCount=$result->rowCount();
			$PageCount=ceil($RecordCount/$PageSize);
	?>
	<form action="" method="get">
		<div style="border:1px solid gray; background: #eee;padding: 4px;">
			查找内容:请输入关键字<input type="text" name="keyword" value="<?=$keyword?>">
			<input type="submit" value="查询">			
		</div>
	</form>
	<table border="1" width="95%">
		<tr>
						 <td width="50px" align="center">序号</td>
						 <td width="50px" align="center">类型</td>
						 <td align="center">书名</td>
						 <td align="center">描述</td>
						 <td align="center" width="200px">图片</td>
						 <td align="center">价格</td>
						 <!-- <td align="center">选择</td> -->
		</tr>
		<?php 
			//$row=$result->fetch(1);
			for($i=0;$i<$PageSize;$i++){
				$row=$result->fetch(1);
				if($row){ ?>
					<tr>
						<td align="center"><?=$row['categoryID']?></td>
						<td><?=$row['type']?></td>
						<td><?=$row['name']?></td>
						<td><?=$row['descn']?></td>
						<td  width="200px"><img style="margin-left: 45px;" src="<?=$row['image']?>"></td>
						<td><?=$row['price']?></td>
						<!-- <td><?//=$row['categoryID']?></td> -->
					</tr>
			<?php	}} ?>		
	</table>
	<p>
		<?php 
			if($Page==1)
			echo "第一页 上一页";
			else 
			echo "<a href='?page=1 & keyword=$keyword'>第一页</a>
				  <a href='?page=".($Page-1)."&keyword=$keyword'>上一页</a>";
			for ($i=1;$i<=$PageCount;$i++){
				if($i==$Page) echo "$i  ";
				else
				echo "<a href='?page=$i & keyword=$keyword'>$i</a>";
			}
			if($Page==$PageCount) 
			echo "下一页 末页";
			else echo "<a href='?page=".($Page+1)."&keyword=$keyword'>下一页</a>
				<a href='?page=".$PageCount."&keyword=$keyword'>末页</a>";
				echo "&nbsp 共".$RecordCount."条记录&nbsp";
				echo "$Page / $PageCount 页";
		?>
	</p>
</body>
</html>