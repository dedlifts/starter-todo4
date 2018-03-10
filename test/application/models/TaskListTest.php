<?php
use PHPUnit\Framework\TestCase;
class TaskListTest extends TestCase
{
    private $CI;
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
    }
    
    function testUncompletedTasks()
    {
        $completed = 0;
        $size = $this->CI->tasks->size();
        $data = $this->CI->tasks->all();
        foreach($data as $task)
        {
            if (!empty($task->status) && $task->status == 2)
            {
                $completed++;
            }
        }
        $this->assertTrue($completed < $size / 2);
    }
}