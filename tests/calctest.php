<?php
use phpdevotee\calc\lib\Calculator;

class CalcTest extends PHPUnit_Framework_TestCase
{
	public function test_addMe()
	{
			$newObj = new Calculator();
			$this->assertEquals(0, $newObj->addMe());
			$this->assertEquals(0, $newObj->addMe(0));
			$this->assertEquals(1, $newObj->addMe(0,1));
			$this->assertEquals(3, $newObj->addMe(0,1,2));
			$this->assertEquals(6.5, $newObj->addMe(0,1,2,3.5));
			$this->assertEquals(6.5, $newObj->addMe(0,1,2,3.5,'s',true));
	}
}