<?php
/**
 * php 5.4
 * 
 * File contain basic calulator program
 * 
 * @author  Chandra Kishor <ck.test.pro@gmail.com>
 * @since   20150122
 * @package calc
 * @version 0.1
 */
namespace phpdevotee\calc\lib; 

class Calculator
{
	
	/**
	 *
	 * @access	public  
	 * 	
	 * 
	 */
	
	public function __construct()
	{
		
	}
	
	/**
	 * 
	 * addMe
	 * 
	 * @param dynamic
	 * @return float|integer
	 */
	public function addMe()
	{
		
		$args = func_get_args();
		$sum = 0;
		
		foreach ($args as $val) {
			if (is_numeric($val)) {
				$sum += $val;
			}
		}
		
		return $sum;
	}
}