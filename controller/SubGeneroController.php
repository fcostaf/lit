<?php
class SubGeneroController{
    public static function cadastrarSubGenero($nome){
        include '../model/SubGeneroModel.php';
        $subgenero=new SubGeneroModel(null,$nome);
        $subgenero->cadastrarSubGenero($subgenero);
    }

    public static function listarSubGeneros(){
        include '../model/SubGeneroModel.php';
        $model=new SubGeneroModel(null,null);
        return $model->listarSubGeneros();
    }

    public static function resgataPorID($idSubGenero){
        include '../model/SubGeneroModel.php';
        $model=new SubGeneroModel(null,null);
        return $model->resgataPorID($idSubGenero);
    }

    public static function alterarSubGenero($id,$nome){
        include '../model/SubGeneroModel.php';
        $subgenero=new SubGeneroModel($id,$nome);
        $subgenero->alterarSubGenero($subgenero);
    }

    public static function excluirSubGenero($id){
        include '../model/SubGeneroModel.php';
        $subgenero=new SubGeneroModel(null,null);
        $subgenero->excluirSubGenero($id);
    }
}
?>