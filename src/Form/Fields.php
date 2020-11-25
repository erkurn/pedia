<?php


namespace Erkurn\Pedia\Form;


abstract class Fields
{
    private string $label;

    private string $name;

    public string $type;

    public static function make(string $label, string $name) : self
    {
        $instance =  new static();
        $instance->label = $label;
        $instance->name = $name;
        return $instance;
    }
}
