<?php
class dbconn{
	function connect(){
		try{
			$dsn="mysql:host=localhost;dbname=yourfoodbuddy";
			$usr="root";
			$pwd="";
			$pdo=new PDO($dsn,$usr,$pwd);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
			return $pdo;
		}
		catch(Exception $e){
			$error_msg=$e->getMessage();
			echo $error_msg;
			exit();
		}
	}
}
?>