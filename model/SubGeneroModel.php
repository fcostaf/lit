<?php
class SubGeneroModel{
    protected $nome;
    protected $id;

    public function __construct($id,$nome){
        $this->id=$id;
        $this->nome=$nome;
    }

    public function getID(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function cadastrarSubGenero(SubGeneroModel $subgenero){
        include_once '../dao/SubGeneroDAO.php';
        $subgenero=new SubGeneroDAO();
        $subgenero->cadastrarSubGenero($this);
    }

    public function listarSubGeneros(){
        include '../dao/SubGeneroDAO.php';
        $dao=new SubGeneroDAO(null);
        return $dao->listarSubGeneros();
    }

    public function resgataPorID($idSubGenero){
        include '../dao/SubGeneroDAO.php';
        $model=new SubGeneroDAO(null);
        return $model->resgataPorID($idSubGenero);
    }

    public function alterarSubGenero(SubGeneroModel $subgenero){

    }

    public function excluirSubGenero($idSubGenero){

    }
}
?>