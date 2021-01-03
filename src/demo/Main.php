<?php


namespace ListOperation\demo;



use ListOperation\controller\Display;
use ListOperation\entity\IntegerNode;

class Main
{
    private IntegerNode $linked_list;
    private string $draw_object;

    public function __construct()
    {
        $this->draw_object = '';
        $this->constuctList();
        $this->displayList();
    }

    private function constuctList()
    {
        $this->linked_list = new IntegerNode(1,new IntegerNode(4,new IntegerNode(6)));

    }

    private function displayList()
    {
        $display = new Display($this->linked_list );
        $display->show();
    }




}