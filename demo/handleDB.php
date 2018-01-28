<?php
	//向数据库取书库的时候防止乱码
	header("content-Type: text/html; charset=UTF8");
$conn = new mysqli("localhost", "root", "7cS8jfTcvQKLqQdj", "chat");
$conn->query("SET NAMES utf8");
//if ($conn -> connect_error) {
//	echo "连接失败";
//} else {
//	echo "连接成功";
//}
function insertData($name, $massage) {
	global $conn;
	$sql = "insert into chatTable(name, massage) values ('$name' , '$massage')";
	if ($conn -> query($sql) == true) {
	} else {
		echo "插入失败:".$conn -> error;
	}
}
//insertData("郭靖", "思考和");

	//从数据库里获取数据
function selectData() {
	global $conn;
	$sql = "select * from chatTable order by date";
	
	//查询
	$res = array();
	$DBdatas = $conn->query($sql);
	while ($row = $DBdatas->fetch_assoc()) {
		//数据1  数据2  数据3  
		//把数据装到大字符串中返回
		$myTime = $row["date"];
		$myTime = substr($myTime ,  -8);
		$str = $row["name"]." ".$myTime." ".$row["massage"];
		array_push($res , $str); 
		
	};
	return $res;	
}	
?>