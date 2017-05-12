<?php
//补全代码-3 从数据库获取id为$id的数据
include_once 'db.config.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="select * from users where id='$id' ";
	$stapdo=$dsc->query($sql);
	$user=$stapdo->fetch();
	//var_dump($user);
}else{
	echo "请指定查询数据的id";
	header('Location:userlist.php');
}
?>
<p>用户名：<?php echo $user['username']; ?></p>
<p>email：<?php echo $user['email']; ?></p>
<p>电话：<?php echo $user['phonenumber']; ?></p>
<p>注册时间：<?php echo date('Y-m-d',$user['time']) ?></p>
<a href="userlist.php">返回用户列表页</a>