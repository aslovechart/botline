<?php
Class LineFriendTest extends PHPUnit_Framework_TestCase{
	var $dummy_keyFriend = 'apichartline';
	public function testKeyFriendRetrunString(){
			$lineFriend = new LineFriend($this->dummy_keyFriend);
			$this->assertInternalType('string',$lineFriend->getKeyFriend());
	}
}
?>