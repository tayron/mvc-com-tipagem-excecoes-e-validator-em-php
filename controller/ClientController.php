<?php
class ClientController 
{
    private $clientModel;
    
    public function __construct(ClientModel $model) {
        $this->clientModel = $model;
    }
    
    public function save(StringObject $name, IntegerObject $phone)
    {
        try{
            $clientEntity = new ClientEntity($name, $phone);
            $this->clientModel->save($clientEntity);
            echo 'Salvo com sucesso!';
        }catch(FalhaPersistenciaException $ex){
            echo 'Erro ao salvar: ' . $ex->getMessage();
        }
    }    
}
