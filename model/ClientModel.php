<?php

class ClientModel 
{
    public function save(ClientEntity $client)
    {
        try{
            ClientValidator::execute($client->getName(), $client->getPhone());
            // Demais lógicas de persistencia aqui
            // $this->database->save($cliente);
        } catch (ClientValidatorException $ex) {
            throw new PersistenceFailureExceptions($ex->getMessage());
        } catch (DatabaseException $ex) {
            throw new PersistenceFailureExceptions($ex->getMessage());
        }
    }
}
