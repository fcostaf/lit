<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Subgênero</title>
</head>
<body>';
    $operacao=$_REQUEST["op"];
    if($operacao=="Alterar"){
        include("../controller/SubGeneroController.php");
        $res=GeneroController::resgataPorId($_REQUEST["idSubGenero"]);
        $qtd=$res->rowCount();
        $row=$res->fetch(PDO::FETCH_OBJ);
        $nome=$row->nome;
        $id=$row->idsubgenero;
        $operacao="Alterar";
    }
    else{
        $nome="";
        $id="";
        $operacao="Incluir";
    }

    echo '<form method="post" action="../controller/processaSubGenero.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value='.$nome.'><br>
        <input type="hidden" name="idSubGen" value='.$id.'><br>
        <input type="hidden" name="op" value='.$operacao.'><br>
        <input type="submit" value='.$operacao.'>
        </form>


</body>
</html>'
?>