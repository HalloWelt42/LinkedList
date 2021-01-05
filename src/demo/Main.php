<?php


namespace ListOperation\demo;


use ListOperation\controller\Display;
use ListOperation\controller\LinkedList;
use ListOperation\entity\Node;

class Main
{
    private ?Node  $linked_list;
    private string $draw_object;

    public function __construct()
    {
        $this -> draw_object = '';
        $this -> constuctList();
        $this -> add_items();
        $this -> displayList();
    }

    private function constuctList()
    {
        $this -> linked_list = new Node( 1, new Node( 4, new Node( 6 ) ) );

    }

    public function add_items()
    {
        $ll = new LinkedList( $this -> linked_list );
        $ll -> interAtFirst( '2' );
        $ll -> insertAtLast( '5' );
        $this -> linked_list = $ll -> get();
    }

    private function displayList()
    {
        $display = new Display( $this -> linked_list );
        $display -> show();
    }


}