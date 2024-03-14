<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Listar Subgêneros</title>
</head>
<body>';
    include "../controller/SubGeneroController.php";
    $res=SubGeneroController::listarSubGeneros();
    $qtd=$res->rowCount();
    if($qtd>0){
        echo '<table class="table table-hover table-striped table-bordered">
                <tr>
                <th>#</th>
                <th>Nome</th>
                </tr>';
        while($row=$res->fetch(PDO::FETCH_OBJ)){
            echo "<tr>
                    <td>$row->idsubenero</td>
                    <td>$row->nome</td>
                    <td>
                    <button onclick=\"location.href='../view/formSubGenero.php?op=Alterar&idSubGenero=".$row->idsubgenero."';\">Alterar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='../controller/processaSubGenero.php?op=Excluir&idSubGenero=".$row->idsubgenero."';}
                    else{false;}\">Excluir</button>
                    </td>";
        }
        echo "</form>";
        print "</tr>";
        print "</table>";

    }else{
        echo "<p>Nenhum registro encontrado!</p>";
    }

  echo "</body>
</html>"
?>