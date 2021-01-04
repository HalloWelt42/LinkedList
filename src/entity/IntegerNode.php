<?php


namespace ListOperation\entity;


use ListOperation\entity\interfaces\INode;

class IntegerNode implements INode
{
    private int              $number;
    private IntegerNode|null $child;

    public function __construct( int $number = 0, $child = null )
    {
        $this -> setData( $number );
        $this -> setChild( $child );
    }

    public function getData():int
    {
        return $this -> number;
    }

    public function getChild():?INode
    {
        return $this -> child;
    }

    public function setChild( ?INode $node ):self
    {
        $this -> child = $node;
        return $this;
    }

    public function setData( $value ):self
    {
        $this -> number = $value;
        return $this;
    }

}