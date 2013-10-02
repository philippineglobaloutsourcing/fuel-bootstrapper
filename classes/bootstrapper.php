<?php

/**
 * @package    Bootstrapper
 * @version    1.0
 * @author     Christopher John Cubos
 * @link       http://github.com/philippineglobaloutsourcing


 * Usage:
 * Bootstrapper::one('test',1);
 * Bootstrapper::two('test2',2); //encrypts text with 1=md5, 2=sha1
 *
 */

namespace Bootstrapper;

class Bootstrapper {
	

	public static function one($varstring='one', $varint=1)
	{
		return $varstring.$varint;
	}

	public static function two($varstring='two', $varint=2)
	{
		if ($varint==2) {$encrypt_type="sha1";} else {$encrypt_type="md5";}
		return self::from_hash($varstring, $encrypt_type);
	}

	public static function from_hash($varstring, $hash_type='md5')
	{
		if ($hash_type='sha1') 
		{
			return sha1($varstring);
		} 
		else 
		{
			return md5($varstring);
		}
	}

}