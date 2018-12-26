<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 18/10/17
 * Time: 上午11:43
 */
$con = mysql_connect("127.0.0.1","well","123456");
if(!$con){
    die('Could not connect Mysql');
}else {
    echo 'connect successfully';
    echo '嘿嘿';
}