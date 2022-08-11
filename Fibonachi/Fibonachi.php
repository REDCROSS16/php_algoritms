<?php

class Fibonacci 
{
    private $fibonachiRow = [];

    public function __construct(
        private int $prev = 0,
        private int $next = 1,
        private int $elements
    )
    {
    }

    public function calculateRow() 
    {
        $this->fibonachiRow = [$this->getPrev(), $this->getNext()];

        for ($i = 3; $i <= $this->elements + 1; ++$i) {
            $sum = $this->getPrev() + $this->getNext();
            $this->setPrev($this->getNext());
            $this->setNext($sum);
            
            $this->fibonachiRow[] = $this->getNext();
        }

        return $this->fibonachiRow;
    }

    private function setNext(int $value) {
        $this->next = $value;
    }

    private function setPrev(int $value) {
        $this->prev = $value;
    }

    private function getNext()
    {
        return $this->next;
    }

    private function getPrev()
    {
        return $this->prev;
    }

    public function calculatePerimeterSum()
    {
        return array_sum($this->fibonachiRow) * 4;
    }
}


$f = new Fibonacci(prev: 1, next: 1, elements: 5);
print_r($f->calculateRow());
echo ($f->calculatePerimeterSum());