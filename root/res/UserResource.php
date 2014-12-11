<?php
require_once("BaseResource.php");

class UserResource {
	public static function create($params) {
		echo "User POST";
	}
	
	public static function read($params) {
		echo "User GET";
	}

	public static function update($params) {
		echo "User PUT";
	}
}

?>