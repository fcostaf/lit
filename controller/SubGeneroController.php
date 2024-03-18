<?php
class SubGeneroController{
    public static function cadastrarSubGenero($nome,$gen){
        include '../model/SubGeneroModel.php';
        $subgenero=new SubGeneroModel(null,$nome,$gen);
        $subgenero->cadastrarSubGenero($subgenero);
    }

    public static function listarSubGeneros(){
        include_once '../model/SubGeneroModel.php';
        $model=new SubGeneroModel(null,null,null);
        return $model->listarSubGeneros();
    }

    public static function resgataPorID($idSubGenero){
        include_once '../model/SubGeneroModel.php';
        $model=new SubGeneroModel(null,null,null);
        return $model->resgataPorID($idSubGenero);
    }

    public static function alterarSubGenero($id,$nome,$gen){
        include '../model/SubGeneroModel.php';
        $subgenero=new SubGeneroModel($id,$nome,$gen);
        $subgenero->alterarSubGenero($subgenero);
    }

    public static function excluirSubGenero($id){
        include '../model/SubGeneroModel.php';
        $subgenero=new SubGeneroModel(null,null,null);
        $subgenero->excluirSubGenero($id);
    }
}
?>