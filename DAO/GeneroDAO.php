<?php
class GeneroDAO{
    public function cadastrarGenero(GeneroModel $genero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="INSERT INTO genero (nome) VALUES (:nome)";
        $stmt=$conex->conn->prepare($sql);
        $stmt->bindValue(':nome',$genero->getNome());
        $res=$stmt->execute();
        if($res){
            echo "<script>alert('Cadastro Realizado com sucesso');</script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
        echo "<script>location.href='../controller/processaGenero.php?op=Listar';</script>";
    }

    public function listarGeneros(){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="SELECT * FROM genero ORDER BY nome";
        return $conex->conn->query($sql);
    }

    public function resgataPorID($idGenero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="SELECT * FROM genero WHERE idgenero='$idGenero'";
        return $conex->conn->query($sql);
    }

    public function alterarGenero(GeneroModel $genero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="UPDATE genero SET nome=:nome WHERE idgenero=:id";
        $stmt=$conex->conn->prepare($sql);
        $stmt->bindValue(':id',$genero->getID());
        $stmt->bindValue(':nome',$genero->getNome());
        $res=$stmt->execute();
        if($res){
            echo "<script>alert('Registro Alterado com sucesso');</script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível alterar o cadastro');</script>";
        }
        echo "<script>location.href='../controller/processaGenero.php?op=Listar';</script>";
    }

    public function excluirGenero($idGenero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="DELETE FROM genero WHERE idgenero='$idGenero'";
        $res=$conex->conn->query($sql);
        if($res){
            echo "<script>alert('Exclusão realizada com sucesso!');</script>";
        }
        else{
            echo "<script>alert('Não foi possível excluir o usuário!');</script>";
        }
        echo "<script>location.href='../controller/processaGenero.php?op=Listar';</script>";
    }
}
?>