<?php
//自动重置过期用户流量，需要加入计划任务，每日执行一次！



function generate_string($length=16) {
	// 密码字符集，可任意添加你需要的字符
	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$password = '';
	for ($i=0; $i<$length; $i++) {
		// 这里提供两种字符获取方式
		// 第一种是使用 substr 截取$chars中的任意一位字符；
		// 第二种是取字符数组 $chars 的任意元素
		// $password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
		$password .= $chars[mt_rand(0, strlen($chars)-1)];
	}
	return $password;
}

//自动要改密码的用户名
$username="xxxx";
//连接数据库，地址，用户名，密码
$conn = @mysql_connect("localhost","xxxx","xxxx");
//选择数据库，xxxx为数据库名
mysql_select_db("xxxx", $conn);
//设置数据库编码
mysql_query("set user set 'utf8'");
//随机密码
$pass = generate_string(6);
//密码重置
$sql = "UPDATE user SET passwd = '".$pass."' WHERE username = '".$username."'";
//写入密码到pass.txt
file_put_contents("pass.txt",$pass);
//密码重置
mysql_query($sql,$conn);
//选择过期时间字段
$expired_time = "select expired_time from user";
//查询过期时间字段
$result = mysql_query($expired_time);
//循环获取过期时间字段
while($expiredtime=mysql_fetch_array($result)){
    //获取过期时间字段
    $time=$expiredtime["expired_time"];
    //转换为日期
    $expired_date=date('Ymd',$time);
    //获取当前日期
    $now_date=date('Ymd');
    //当前日期和过期日期一样时候，流量重置为0
    if ($now_date==$expired_date){
        //流量为0
        $transfer_enable = 0;
        //流量重置
        $sql = "UPDATE user SET transfer_enable = '".$transfer_enable."' WHERE expired_time = '".$time."'";
        //流量重置
        mysql_query($sql);
        echo "done";
    } else {
        echo "ERROR";
    }
}
