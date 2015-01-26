<?php
namespace phpdevotee\calc\lib; 
use phpdevotee\calc\lib\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    public $calcObj = null;

    public function __construct()
    {
        $this->calcObj = new Calculator();
    }

    public function test_addMe()
    {
        $this->assertEquals(0, $this->calcObj->addMe());
        $this->assertEquals(0, $this->calcObj->addMe(0));
        $this->assertEquals(1, $this->calcObj->addMe(0, 1));
        $this->assertEquals(3, $this->calcObj->addMe(0, 1, 2));
        $this->assertEquals(6.5, $this->calcObj->addMe(0, 1, 2, 3.5));
        $this->assertEquals(6.5, $this->calcObj->addMe(0, 1, 2, 3.5, 's', true));
    }

    public function test_subMe()
    {
        $this->assertEquals(2, $this->calcObj->subMe(4, 2));
        $this->assertEquals(- 2, $this->calcObj->subMe(2, 4));
        $this->assertEquals(0, $this->calcObj->subMe(2, 's'));
    }

    public function test_multiplyMe()
    {
        $this->assertEquals(8, $this->calcObj->multiplyMe(4, 2),'First Assert!');
        $this->assertEquals(0, $this->calcObj->multiplyMe(4, 2, 0),'Return 0!');
        $this->assertEquals(8, $this->calcObj->multiplyMe(4, 2, 's'),'It should return 8');
    }

    public function test_divideMe()
    {
        $this->assertEquals(2, $this->calcObj->divideMe(4, 2));
        $this->assertEquals(3, $this->calcObj->divideMe(10, 3));
        $this->assertEquals(0, $this->calcObj->divideMe(4, 's'));
        $this->assertEquals(0, $this->calcObj->divideMe(0, 2));
        try {
            $this->calcObj->divideMe(2, 0);
            $this->fail("Expected exception not thrown");
        } catch (\Exception $e) {
            
            $this->assertEquals("Can not divide by zero!", $e->getMessage());
        }
    }
    

    
}