<?php
switch($_REQUEST["op"]){
    case "Incluir":
        incluir();break;
    case "Alterar":
        alterar();break;
    case "Excluir":
        excluir();break;
    case "Listar":
        listar();break;
    default:
        echo "nao encontrou chave";
}

function incluir(){
    $nome=$_POST["nome"];
    $gen=$_POST['comboGenero'];
    include 'SubGeneroController.php';
    $contr=new SubGeneroController();
    $contr->cadastrarSubGenero($nome,$gen);
}

function alterar(){
    $nome=$_POST["nome"];
    $id=$_POST["idSubGen"];
    $idGenero==$_POST["comboGenero"];

    //include_once "../controller/GeneroController.php";
    //$resGen=GeneroController::resgataPorIDSub($row->genero_idgenero);
    //$resGen=$resGen->fetch(PDO::FETCH_OBJ);

    include 'SubGeneroController.php';
    $contr=new SubGeneroController();
    $contr->alterarSubGenero($id,$nome,$idGen);
}

function excluir(){
    $id=$_REQUEST["idSubGenero"];
    include 'SubGeneroController.php';
    $contr=new SubGeneroController();
    $contr->excluirSubGenero($id);
}

function listar(){
    include_once '../view/formListarSubGenero.php';
}
?>