<?php
自动重置过期用户流量，需要加入计划任务
$conn = @mysql_connect("localhost","xxxx","xxxx");//数据库地址，用户名，密码

mysql_select_db("xx", $conn);//数据库

mysql_query("set user set 'utf8'");//xxx为数据库表名，数据库编码 

$expired_time = "select expired_time from user";//需要查询表的字段

$result = mysql_query($expired_time);//查询字段

while($expiredtime=mysql_fetch_array($result)){

    $time=$expiredtime["expired_time"];

    $expired_date=date('Ymd',$time);
    
    $now_date=date('Ymd');

    //当前日期和过期日期一样时候，流量重置为0
    if ($now_date==$expired_date){

        //流量为0
        $transfer_enable = 0;
        //流量重置
        $sql = "UPDATE user SET transfer_enable = '".$transfer_enable."' WHERE expired_time = '".$time."'";
        //流量重置
        mysql_query($sql);

    }

}
