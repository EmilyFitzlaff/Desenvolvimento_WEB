<?php

include_once('../config/connection.php');
include_once('../config/functions.php');

class Transportadora { 
    private $IDTransportadora;
    private $NomeCompanhia;
    private $Telefone;

    public function CadastrarTransportadora($NomeCompanhia, $Telefone){   
        $IDTransportadora = getMaxID("shipper_id", "shippers") +1;

        $stmt = Conectar()->prepare("INSERT INTO shippers (Shipper_id, Company_Name, phone) VALUES ($IDTransportadora, '". $NomeCompanhia ."', '". $Telefone."')");       
    
        $stmt->execute();
    }    
}

?>