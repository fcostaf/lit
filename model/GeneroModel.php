<?php
class GeneroModel{
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

    public function cadastrarGenero(GeneroModel $genero){
        include_once '../dao/GeneroDAO.php';
        $genero=new GeneroDAO();
        $genero->cadastrarGenero($this);
    }

    public function listarGeneros(){
        include_once '../dao/GeneroDAO.php';
        $dao=new GeneroDAO(null);
        return $dao->listarGeneros();
    }

    public function resgataPorID($idGenero){
        include '../dao/GeneroDAO.php';
        $model=new GeneroDAO(null);
        return $model->resgataPorID($idGenero);
    }

    public function resgataPorIDSub($idGenero){
        include_once '../dao/GeneroDAO.php';
        $model=new GeneroDAO(null);
        return $model->resgataPorID($idGenero);
    }

    public function alterarGenero(GeneroModel $genero){
        include_once '../dao/GeneroDAO.php';
        $genero=new GeneroDAO();
        $genero->alterarGenero($this);
    }

    public function excluirGenero($idGenero){
        include_once '../dao/GeneroDAO.php';
        $genero=new GeneroDAO();
        $genero->excluirGenero($idGenero);
    }
}
?>