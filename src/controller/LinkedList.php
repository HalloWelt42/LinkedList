<?php


namespace ListOperation\controller;


use ListOperation\entity\Node;
use ListOperation\entity\interfaces\INode;

class LinkedList
{
    private INode|null $linked_list;
    private INode|null $node;


    public function __construct( Node $linked_list = null )
    {
        $this -> linked_list = $linked_list;
    }

    public function insertAtLast( string $data )
    {
        $this->node = $this->linked_list;
        /**
         * zum letzten Knoten navigieren und Referenz merken
         */
        while ( $this -> node -> getChild() != null ) {
            $this -> node = $this -> node -> getChild();
        }

        $this -> node->setChild( new Node( $data ));

    }

    public function interAtFirst( string $data ):self{
        $node = new Node($data );
        $node->setChild($this->linked_list);
        $this->linked_list = $node;
        return $this;
    }

    public function get():?Node{
        return $this->linked_list;
    }

}