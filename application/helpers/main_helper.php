<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	function bcrypt($pass, $cost){
		$chars = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

		$salt = sprintf('$2a$%02d$', $cost);

		mt_srand();

		for($i=0;$i<22;$i++) $salt.=$chars[mt_rand(0, 63)];

		return crypt($pass, $salt);
	}
?>