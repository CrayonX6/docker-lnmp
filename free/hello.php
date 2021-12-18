<?php

class Person
{
    public $hair;
    protected $hair2;
    private $hair3;

    public function __construct($hair)
    {
        $this->hair = $hair;
    }

    public function eat($x)
    {
        echo "吃：{$x}<br>";
    }

    public function say()
    {
        echo "说：我的头发是{$this->hair}的<br>";
    }
}

class Woman extends Person {
    public function dress() {
       echo $this->hair2;
    }
}

$x = new Woman("长");
$x->say();
$x->eat("苹果");

echo $x->hair;
