<?php


class dbconnect{
	public static $dbh;
	public static function getDbh() {

	$user = 'root';
	$pass = '';

		if (self::$dbh) return self::$dbh;
		else {
			self::$dbh = new PDO('mysql:host=localhost;dbname=toilet', $user, $pass);	
			self::$dbh->query('SET NAMES UTF8');
			return self::$dbh;
		}
	}
}


?>