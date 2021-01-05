<?php


namespace ListOperation\entity;


use ListOperation\entity\interfaces\INode;

class Node implements INode
{
    private string    $data;
    private Node|null $child;

    public function __construct( string $data = '', $child = null )
    {
        $this -> setData( $data );
        $this -> setChild( $child );
    }

    public function getData():int
    {
        return $this -> data;
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

    public function setData( string $value ):self
    {
        $this -> data = $value;
        return $this;
    }

}