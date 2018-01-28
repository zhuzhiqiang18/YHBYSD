<?php
	include_once("handleDB.php");
	$result = selectData();
//	var_dump($result);
//	$xxx = $result[0];
//	echo "<h1>$111</h1>";	
$msg = "<ul>";
for ($i = 0; $i < count($result); $i++) {
	//装有三个元素的字符串
	$tempMsg = $result[$i];
//	<ul><li>name time massage</li></ul>
	//把字符串拆分出来
	//string ---->array
	$tempArr = explode(" ", $tempMsg) ;
//	var_dump($tempArr);
	$name = $tempArr[0];
	$myTime = $tempArr[1];
	$massage = $tempArr[2];

	//开始吧数据装到标签中
	//并拼接到msg变量中返回
	$msg = $msg."<li><p><strong>".$name."</strong>".$myTime."</p><p>".$massage."</p><li>";
}
echo $msg."</ul>";



?>