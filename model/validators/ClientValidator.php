<?php

class ClientValidator 
{
    static function execute(StringObject $nome, IntegerObject $telefone) 
    {
        if(!$nome->getValue()){
            throw new ClientValidatorException('O nome não deve ser vazio');
        }
        
        if(!$telefone->getValue()){
            throw new ClientValidatorException('O telefone não deve ser vazio');
        }
    }    
}
