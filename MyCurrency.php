<?php
class MyCurency{
    public  $buying;
    public  $selling;
    public  $name; 

    public function __construct(string $buying, string $selling, string $name)
    {
        $this->buying = $buying;
        $this->selling = $selling;
        $this->name = $name;
    }
}