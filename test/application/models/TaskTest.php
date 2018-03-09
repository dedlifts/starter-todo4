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
    
    function testValidPriority() {
        $this->task->priority = 1;
        $this->assertEquals(1, $this->task->priority);
    }
    function testInvalidPriority() {
        $this->expectException('InvalidArgumentException');
        $this->task->priority = 4;
    }
    
    function testValidSize() {
        $this->task->size = 1;
        $this->assertEquals(1, $this->task->size);
    }
    function testInvalidSize() {
        $this->expectException('InvalidArgumentException');
        $this->task->size = 4;
    }
    
    function testValidGroup() {
        $this->task->group = 1;
        $this->assertEquals(1, $this->task->group);
    }
    function testInvalidGroup() {
        $this->expectException('InvalidArgumentException');
        $this->task->group = 5;
    }
    
    function testValidStatuses() {
        $this->task->statuses = 1;
        $this->assertEquals(1, $this->task->statuses);
    }
    function testInvalidStatuses() {
        $this->expectException('InvalidArgumentException');
        $this->task->statuses = 3;
    }
    
    function testValidFlags() {
        $this->task->flags = 1;
        $this->assertEquals(1, $this->task->flags);
    }
    function testInvalidFlags() {
        $this->expectException('InvalidArgumentException');
        $this->task->flags = 2;
    }
}
