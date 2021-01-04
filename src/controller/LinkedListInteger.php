<?php


namespace ListOperation\controller;


use ListOperation\entity\IntegerNode;
use ListOperation\entity\interfaces\INode;

class LinkedListInteger
{
    private INode|null $linked_list;
    private INode|null $node;

    public function __construct( IntegerNode $linked_list = null )
    {
        $this -> linked_list = $linked_list;
    }

    public function insertAtLast( $number )
    {
        $this->node = $this->linked_list;
        /**
         * zum letzten Knoten navigieren und Referenz merken
         */
        while ( $this -> node -> getChild() != null ) {
            $this -> node = $this -> node -> getChild();
        }

        $this -> node->setChild( new IntegerNode( $number ));

    }

    public function get(){
        return $this->linked_list;
    }

}