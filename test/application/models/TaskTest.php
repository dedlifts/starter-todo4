<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase {
    private $CI;
    private $task;
    function setUp() {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->task = new Task();
    }
    
    function testSetPriority() {
        $this->assertEquals(1, $this->task->setPriority(1));
        $this->assertEquals(2, $this->task->setPriority(2));
        $this->assertEquals(3, $this->task->setPriority(3));
        $this->assertEquals(4, $this->task->setPriority(4));
    }
    
    function testSetSize() {
        $this->assertEquals(1, $this->task->setSize(1));
        $this->assertEquals(2, $this->task->setSize(2));
        $this->assertEquals(3, $this->task->setSize(3));
        $this->assertEquals(4, $this->task->setSize(4));
    }
    
    function testSetGroup() {
        $this->assertEquals(1, $this->task->setGroup(1));
        $this->assertEquals(2, $this->task->setGroup(2));
        $this->assertEquals(3, $this->task->setGroup(3));
        $this->assertEquals(4, $this->task->setGroup(4));
        $this->assertEquals(5, $this->task->setGroup(5));
    }
    
    function testSetStatuses() {
        $this->assertEquals(1, $this->task->setStatuses(1));
        $this->assertEquals(2, $this->task->setStatuses(2));
        $this->assertEquals(3, $this->task->setStatuses(3));
    }
    
    function testSetFlags() {
        $this->assertEquals(1, $this->task->setFlags(1));
        $this->assertEquals(2, $this->task->setFlags(2));
    }
}
