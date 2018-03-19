<?php

class StringObject implements TypeInterface 
{
	private $value;

    public function __construct($value) 
    {
        $this->value = (string) $value;
    }
	
	public function getValue()
	{
		return $this->value;
	}    
}
