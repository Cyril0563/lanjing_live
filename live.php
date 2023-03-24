<?php
$id=$_GET['id'];
$url="http://hwrr.jx.chinamobile.com:8080/PLTV/88888888/224/".$id."/index.m3u8";
header('location:'.urldecode($url));
?>