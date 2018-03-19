<?php

class ClientEntity
{
    private $name;
    private $phone;
    
    public function __construct(StringObject $name, IntegerObject $phone) 
    {
        $this->name = $name;
        $this->phone = $phone;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }    
}
