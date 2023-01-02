<?php
    echo "이름 :".iconv("utf-8", "cp949",$_GET['name']);
    echo "<br>";
    echo "성별 :".$_GET['gender'];
    echo "hobby의 값 :".$GET['hobby'];
    echo "음식 :".$GET['food'];
?>

