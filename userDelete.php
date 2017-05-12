<?php
include 'db.config.php';
//补全代码-6 删除数据
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sqll="delete from users where id='$id' ";
	$result=$dsc->exec($sqll);
	if($result){
		echo "用户已经删除<br/>";
		echo "<a href='userlist.php'>返回主页</a>";
	}
}
