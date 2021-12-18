<?php
class Obj{
    public $landlord='张三';
    private $farmer='李四';

    public function  identity($id=""){
        echo $this->farmer;
    }
}
$object=new Obj();
echo $object->landlord;
var_dump($object->game());