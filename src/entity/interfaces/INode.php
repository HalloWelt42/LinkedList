<?php


namespace ListOperation\entity\interfaces;


interface INode
{
    public function getData();

    public function getChild();

    public function setChild( ?INode $node );

    public function setData( string $value );
}