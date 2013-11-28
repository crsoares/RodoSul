<?php

namespace Acme\TaskBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{
    protected $task;
    
    protected $dueDate;
    
    /**
     * @Assert\Type(type="Acme\TaskBundle\Entity\Category") 
     */
    protected $category;
    
    public function getTask()
    {
        return $this->task;
    }
    
    public function setTask($task)
    {
        $this->task = $task;
    }
    
    public function getDueDate()
    {
        return $this->dueDate;
    }
    
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }
    
    public function getCategory()
    {
        return $this->category;
    }
    
    public function setCategory($category)
    {
        $this->category = $category;
    }
}

