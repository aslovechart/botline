<?php
Class LineFriend{
	private $keyfriend;
	public function __construct($keyfriend){
			$this->keyfriend = $keyfriend;
	}
	public function getKeyFriend(){
		return $this->keyfriend;
	}
}
?>