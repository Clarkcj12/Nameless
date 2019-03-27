<?php
class Hash {
	public static function make($string, $salt = '') {
		return hash('sha256', $string . $salt);
	}
	
<<<<<<< HEAD
	public static function salt($length) {
		return mcrypt_create_iv($length);		
	}
	
=======
>>>>>>> upstream/master
	public static function unique() {
		return self::make(uniqid());
	}
	
<<<<<<< HEAD
}
=======
}
>>>>>>> upstream/master
