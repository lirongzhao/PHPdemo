<?php
include 'common.inc.php';
/**
 * 补全代码-1 连接数据库，设置数据库字符编码
 */
$dsn='mysql:host=10.7.1.98;dbname=201504zhaolirong';
$dsc=new PDO($dsn,'201504zhaolirong','mysql2015') or die('连接失败');
$dsc->exec('set names utf8');


