<?php
    header("Content-type:application/json; charset=utf-8");

    $link = mysqli_connect('localhost','root','','praise');
    if (!$link) 
    { 
        die("连接错误: " . mysqli_connect_error()); 
    } 
?>