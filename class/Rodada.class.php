<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Rodada extends CRUD {

    private $id_rodada;
    private $numero_rodada;
    private $time_rodada;
    private $pontos_rodada;

    public function __construct(){
        $this->crd = new CRUD();
    }	

    public function insere($numero_rodada,$time_rodada,$pontos_rodada){    	
        $this->crd->insert('rodadas','numero_rodada=?,time_rodada=?,pontos_rodada=?',array($numero_rodada,$time_rodada,$pontos_rodada));
    }
    
    public function edita($pontos_rodada,$id_rodada){
    	$this->crd->update('rodadas','pontos_rodada=? WHERE id_rodada=?',array($pontos_rodada,$id_rodada));
    }
    
    public function deleta($id_rodada){    	
        $this->crd->delete('rodadas','WHERE id_rodada=?',array($id_rodada));        
    }
    
}

?>