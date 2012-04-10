<?php

//imame dva klas Video i VideoProxy, koito nasledqvat interface-a IVideo
//ideqta e che kogato imame instancii koito naprimer kakto v sluchaq sydyrjat video failove
//mojem da napravim edin ProxyVideo klas koito da se svyrzva s Video klasa samo kogato se nalaga 
//( v sluchaq tova stava s definirata v klasa Video Proxy funkciq play)
//i da se izbegne izlishnoto syzdavane na tejki instacii sydyrjashti video failove

interface IVideo
{
	function play();
}

class Video implements IVideo
{
	private $title;
	public function __construct($title)
	{
		$this->title = $title;
	}
	public function play()
	{
		echo "playing".$this->title."video";
	}
}

class VideoProxy implements IVideo
{
	private $video;
	private $title;
	public function __construct($str)
	{
		$this->title=$str;
	}
	public function play()
	{
		if($this->video==null) $this->video = new Video($this->title);
		$this->video->play();
	}
}


?>