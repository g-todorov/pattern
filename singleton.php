<?php
class Singleton //pozvolqva da imame klas samo s edna instanciq
{
	private static $instance=null; //imame dostyp bez instanciq

	private function __construct() { //zabranqva syzdavaneto na novi instancii
	
	}
	
	public static function getInstance() //ako veche ima stoinost za $instance veche shte se vryshta samo tq
	{
		if(self::$instance=null){
			self::$instance=new Singleton;
		}
		return self::$instance;
	}
}
?>