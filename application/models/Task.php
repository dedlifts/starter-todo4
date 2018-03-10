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
    private $statuses;
    private $flags;
    
    public function __get($key) {
        return $this->$key;
    }

    public function setPriority($priority) {
        if ($priority > 3 || $priority < 1) {
            throw new InvalidArgumentException('Priority not within range.');
        }
        $this->priority = $priority;
        return $this;
    }

    public function setSize($size) {
        if ($size > 3 || $size < 1) {
            throw new InvalidArgumentException('Size not within range.');
        }
        $this->size = $size;
        return $this;
    }

    public function setGroup($group) {
        if ($group > 4 || $group < 1) {
            throw new InvalidArgumentException('Group not within range.');
        }
        $this->group = $group;
        return $this;
    }
    
    public function setStatuses($statuses) {
        if ($statuses > 2 || $statuses < 1) {
            throw new InvalidArgumentException('Status not within range.');
        }
        $this->statuses = $statuses;
        return $this;
    }
    
    public function setFlags($flags) {
        if ($flags != 1) {
            throw new InvalidArgumentException('Flag not within range.');
        }
        $this->flags = $flags;
        return $this;
    }
}