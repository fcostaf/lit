<?php
class GeneroController{
    public static function cadastrarGenero($nome){
        include '../model/GeneroModel.php';
        $genero=new GeneroModel(null,$nome);
        $genero->cadastrarGenero($genero);
    }

    public static function listarGeneros(){
        include '../model/GeneroModel.php';
        $model=new GeneroModel(null,null);
        return $model->listarGeneros();
    }

    public static function resgataPorID($idGenero){
        include '../model/GeneroModel.php';
        $model=new GeneroModel(null,null);
        return $model->resgataPorID($idGenero);
    }

    public static function alterarGenero($id,$nome){
        include '../model/GeneroModel.php';
        $genero=new GeneroModel($id,$nome);
        $genero->alterarGenero($genero);
    }

    public static function excluirGenero($id){
        include '../model/GeneroModel.php';
        $genero=new GeneroModel(null,null);
        $genero->excluirGenero($id);
    }
}
?>