<?php
//echo " OPCAO: ".$_REQUEST["op"];

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
    include 'GeneroController.php';
    $contr=new GeneroController();
    $contr->cadastrarGenero($nome);
}

function alterar(){
    $nome=$_POST["nome"];
    $id=$_POST["id"];
    include 'GeneroController.php';
    $contr=new GeneroController();
    $contr->alterarGenero($id,$nome);
}

function excluir(){
    $id=$_REQUEST["idGenero"];
    include 'GeneroController.php';
    $contr=new GeneroController();
    $contr->excluirGenero($id);
}

function listar(){
    include_once '../view/formListarGenero.php';
}
?>