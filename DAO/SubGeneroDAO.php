<?php
class SubGeneroDAO{
    public function cadastrarSubGenero(SubGeneroModel $subgenero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="INSERT INTO subgenero (nome) VALUES (:nome)";
        $stmt=$conex->conn->prepare($sql);
        $stmt->bindValue(':nome',$subgenero->getNome());
        $res=$stmt->execute();
        if($res){
            echo "<script>alert('Cadastro Realizado com sucesso');</script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
        echo "<script>location.herf='../controller/processaSubGenero.php?op=Listar';</script>";
    }

    public function listarSubGeneros(){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="SELECT * FROM subgenero ORDER BY nome";
        return $conex->conn->query($sql);
    }

    public function resgataPorID($idSubGenero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="SELECT * FROM subgenero WHERE idsubgenero='$idSubGenero'";
        return $conex->conn->query($sql);
    }

    public function alterarSubGenero(SubGeneroModel $subgenero){

    }

    public function excluirSubGenero($idSubGenero){

    }
}
?>