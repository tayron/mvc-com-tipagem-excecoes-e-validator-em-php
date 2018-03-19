<?php

class IntegerObject implements TypeInterface 
{
	private $value;
    
    public function __construct($value) 
    {
        $this->value = (int) $value;
    }
	
	public function getValue()
	{
		return $this->value;
	}    
}
