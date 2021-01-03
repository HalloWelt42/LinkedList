<?php


namespace ListOperation\controller;





use ListOperation\entity\interfaces\INode;

class Display
{

    private INode $node;
    private string $draw_object;

    public function __construct( INode $node )
    {
        $this->draw_object = '';
        $this->node = $node;
        $this->drawer($this->node);
    }

    public function show(){
        print_r($this->draw_object);
        return $this;
    }

    public function get():string{
        return $this->draw_object;
    }

    private function drawer( ?INode $linked_list )
    {
        if( $linked_list instanceof INode){
            $this->draw_object .= '->' . $linked_list->getData();
            $this->drawer($linked_list->getChild());
        }
    }
}