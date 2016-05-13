<?php 
Class LineFriendModel{

	public function __construct(){
	
	}

	public function checkDuplicate($count){
		return $count==0?true:false;
	}

	public function insertLineFriend($insertID){
		return $insertID>0?true:false;
	}
}
?>