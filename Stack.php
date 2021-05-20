<?php


class Stack
{
    public array $stack;
    public int $limit;

    public function __construct(int $limit = 20)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit)
        {
            array_unshift($this->stack, $item);
        } else {
            throw new RuntimeException("Stack is full");
        }
    }

    public function pop()
    {
        if ($this->isEmpty())
        {
            throw new RuntimeException("Stack is empty");
        } else
        {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }




}