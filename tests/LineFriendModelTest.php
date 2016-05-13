<?php
Class LineFriendModelTest extends PHPUnit_Framework_TestCase{
	var $dummy_keyFriend = 'apichartline';

	public function testKeyFriendNotDuplicateReturnTrue(){
		$table = $this->getMock('TableFriend', array('where', 'count'));
		$table->expects($this->once())->method('where')->will($this->returnValue($table));
		$table->expects($this->once())->method('count')->will($this->returnValue(0));	

		$lineFriendModel = new LineFriendModel();
		$this->assertEquals(true,$lineFriendModel->checkDuplicate($table->where('keyfriend','=',$this->dummy_keyFriend)->count()));
	}

	public function testKeyFriendDuplicateReturnFalse(){
		$table = $this->getMock('TableFriend', array('where', 'count'));
		$table->expects($this->once())->method('where')->will($this->returnValue($table));
		$table->expects($this->once())->method('count')->will($this->returnValue(3));	

		$lineFriendModel = new LineFriendModel();
		$this->assertEquals(false,$lineFriendModel->checkDuplicate($table->where('keyfriend','=',$this->dummy_keyFriend)->count()));		
	}

	public function testInsertLinefriendReturnIntiger(){
		$table = $this->getMock('TableFriend', array('insertGetId'));
		$table->expects($this->once())->method('insertGetId')->will($this->returnValue(1));

		$DB = $this->getMock('DB', array('raw'));
		$DB->expects($this->once())->method('raw')->will($this->returnValue(strtotime('now')));
		
		$lineFriendModel = new LineFriendModel();
		$this->assertEquals(true,$lineFriendModel->insertLineFriend($table->insertGetId([
				'keyfriendID' => $this->dummy_keyFriend,
				'created'=>$DB->raw('now()')
			])));
	}
}
?>