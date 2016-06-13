<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Time extends CRUD {

    private $id_time;
    private $nome_time;
    private $tecnico_time;

    public function __construct(){
        $this->crd = new CRUD();
    }	

    public function insere($nome_time,$tecnico_time){    	
        $this->crd->insert('times','nome_time=?,tecnico_time=?',array($nome_time,$tecnico_time));
    }
    
    public function edita($nome_time,$tecnico_time,$id_time){
    	$this->crd->update('times','nome_time=?,tecnico_time=? WHERE id_time=?',array($nome_time,$tecnico_time,$id_time));
    }
    
    public function deleta($id_time){    	
        $this->crd->delete('times','WHERE id_time=?',array($id_time));        
    }
}

?>