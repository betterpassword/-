<?php 
	$dsn="mysql:host=localhost;dbname=bookstore";
	$db=new PDO($dsn,'root','root');
	$db->query('set names utf8');
?>