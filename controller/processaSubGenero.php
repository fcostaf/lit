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
    $idGen==$_POST["comboGenero"];
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