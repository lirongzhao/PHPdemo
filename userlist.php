<?php
//补全代码-2  pdo方式获取所有用户信息，显示用户列表
include_once 'db.config.php';
$stapdo=$dsc->query('select * from users');
$users=$stapdo->fetchAll();
echo "<table border='1' width='800px'>";
echo "<tr><th>编号</th><th>用户名</th><th>操作</th></tr>";
$i=1;
foreach ($users as $user) {
	# code...
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$user['username']."</td>";
	//操作列
	$id=$user['id'];
	echo "<td>";
	echo "<a href='editUser.php?id=$id'>修改</a>&nbsp;&nbsp;";
	echo "<a href='userDelete.php?id=$id'>删除</a>&nbsp;&nbsp;";
	echo "<a href='viewUser.php?id=$id'>查看</a>";
	echo "</td>";
	$i++;
	echo "</tr>";
}
echo "</table>";



