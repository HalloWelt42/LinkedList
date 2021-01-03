<?php


namespace ListOperation\entity;



use ListOperation\entity\interfaces\INode;

class IntegerNode implements INode
{
    private int              $number;
    private IntegerNode|null $child;

    public function __construct( int $number, $child = null )
    {
        $this -> number = $number;
        $this -> child  = $child;
    }

    public function getData():int
    {
        return $this -> number;
    }

    public function getChild():?IntegerNode
    {
        return $this -> child;
    }

}