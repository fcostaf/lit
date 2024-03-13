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
    include 'SubGeneroController.php';
    $contr=new SubGeneroController();
    $contr->cadastrarSubGenero($nome);
}

function alterar(){

}

function excluir(){

}

function listar(){
    include '../view/formListarAluno.php';
}
?>