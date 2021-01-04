<?php


namespace ListOperation\entity\interfaces;


interface INode
{
    public function getData():int|string;

    public function getChild():?INode;

    public function setChild( ?INode $node ):self;

    public function setData( int|string $value ):self;
}