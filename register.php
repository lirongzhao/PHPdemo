<?php
//补全代码-4   pdo方式实现注册功能，注册成功，页面跳转至用户详情页面
include_once 'db.config.php';
if(isset($_POST['submit'])){
  $name=$_POST['username'];
  $pwd=$_POST['password'];
  $repwd=$_POST['repassword'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $introduction=$_POST['introduction'];
  $time=time();
  $sql="INSERT INTO `users`( `username`, `password`, `repassword`, `email`,`phonenumber`,`introduction`,`time`) VALUES ('$name','$pwd','$repwd','$email','$phone','$introduction','$time')";
  $insert=$dsc->exec($sql);
  if($insert){
    $id=$dsc->lastInsertId();
    header("Location:viewUser.php?id=$id");
  }
}

?>

<html>
  <head>
      <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <title>新用户注册</title>
      <script type="text/javascript">
      //表单验证部分暂时省略
      </script>
      <style>	
		*{
			font-size:36px;
		}
      </style>
  </head>
  <body>
      <form action="register.php" method="post">
          <table>
              <caption>新用户注册</caption>
              <tr>
                  <td>用户名：</td>
                  <td><input type="text" name="username" /></td>
              </tr>
              <tr>
                  <td>密码：</td>
                  <td><input type="password" name="password" /></td>
              </tr>
              <tr>
                  <td>重复密码：</td>
                  <td><input type="password" name="repassword" /></td>
              </tr>
              <tr>
                  <td>邮箱：</td>
                  <td><input type="text" name="email" /></td>
              </tr>
              <tr>
                  <td>电话：</td>
                  <td><input type="text" name="phone" value=""/></td>
              </tr>
              <tr>
                  <td>个人介绍：</td>
                  <td><textarea name="introduction" cols="35" rows="8"></textarea></td>
              </tr>
              <tr><td colspan="2" style="text-align: center;">
                  <input type="submit" name="submit" value="注册" />&nbsp;
                  <input type="reset" name="reset" value="重置" />
                  <span style="font-size:9pt">已有帐号？<a href="./login.html">点此</a>登录</span>
              </td></tr>
          </table>
      </form>
  </body>
</html>