<?php
/**
 * Using php 5.4
 *
 * File contain basic calulator program
 *
 * @category NONE
 * @package  Calc
 * @author   Chandra Kishor <ck.test.pro@gmail.com>
 * @since    20150122
 */
namespace phpdevotee\calc\lib;

/**
 * Basic class used for calulation
 *
 * provide handy function such as
 *
 * adding
 * substration
 * divison
 * multiply
 */

class Calculator
{
    
    /**
     *
     * @access    public
     */
    
    public function __construct()
    {
        
    }
    
    /**
     * addMe
     *
     * Function is used to add number
     *
     * @access public
     * @param  mixed Actually you can pass any number pf parameter here
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
    /**
     * subMe
     *
     * This funciton is used to substract two values
     *
     * @access public
     * @param number $from
     * @param number $to
     * @return number
     */
    public function subMe($from, $to)
    {
        $sub = 0;
        
        if (is_numeric($from) && is_numeric($to)) {
            $sub = $from-$to;
        }
        
        return $sub;
    }
    
    /**
     * mulitplyMe
     *
     * Function is used to mulitply many numbers passed to function
     *
     * @access public
     * @param mixed int|float any number of parameter
     * @return number
     */
    public function multiplyMe()
    {
        
        $args = func_get_args();
        $result = 1;
        
        foreach ($args as $val) {
            // break the loop if any value is zero by doing result zero
            if ($val === 0) {
                $result = 0;
                break;
            }
            if (!is_numeric($val)) {
                continue;
            }
                $result *= $val;
            
        }
        
        return $result;
        
    }
    /**
     *
     * Function is used for division
     *
     * @param int|float $to
     * @param int|float $by
     * @throws \Exception
     * @return int
     */
    public function divideMe($to, $by)
    {
        $result = 0;
        
        if (is_numeric($to) && is_numeric($by)) {
            if ($by == 0) {
                throw new \Exception('Can not divide by zero!');
            }
            $result = (int)($to / $by);
        }
        
        return $result;
    }
}
