<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Task extends Entity {
    private $task;
    private $priority;
    private $size;
    private $group;
    private $field;
    private $statuses;
    private $flags;
    
    function setTask($task) {
        $this->task = $task;
    }

    function setPriority($priority) {
        $this->priority = $priority;
    }

    function setSize($size) {
        $this->size = $size;
    }

    function setGroup($group) {
        $this->group = $group;
    }

    function setField($field) {
        $this->field = $field;
    }
    
    function setStatuses($statuses) {
        $this->statuses = $statuses;
    }
    
    function setFlags($flags) {
        $this->flags = flags;
    }
}