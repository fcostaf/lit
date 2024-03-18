<?php
class SubGeneroDAO{
    public function cadastrarSubGenero(SubGeneroModel $subgenero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        
        $subGenString=$subgenero->getGen();
        $sqlGen="SELECT idgenero FROM genero WHERE nome='$subGenString'";
        $res=$conex->conn->query($sqlGen);
        $idGen=$res->fetch(PDO::FETCH_OBJ);
        
        $sql="INSERT INTO subgenero (nome,genero_idgenero) VALUES (:nome,:gen)";
        $stmt=$conex->conn->prepare($sql);
        $stmt->bindValue(':nome',$subgenero->getNome());
        $stmt->bindValue(':gen',$idGen->idgenero);
        $res=$stmt->execute();
        if($res){
            echo "<script>alert('Cadastro Realizado com sucesso');</script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível realizar o cadastro');</script>";
        }
        echo "<script>location.href='../controller/processaSubGenero.php?op=Listar';</script>";
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
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="UPDATE subgenero SET nome=:nome,genero_idgenero=:idGen WHERE idsubgenero=:id";
        $stmt=$conex->conn->prepare($sql);
        echo "SUB GENERO :".$subgenero->getID()."<BR>";
        echo "NOME :".$subgenero->getNome()."<BR>";
        echo "ID GENERO :".$subgenero->getGen()."<BR>";

        $stmt->bindValue(':id',$subgenero->getID());
        $stmt->bindValue(':nome',$subgenero->getNome());
        $stmt->bindValue(':idGen',$subgenero->getGen());
        $res=$stmt->execute();
        if($res){
            echo "<script>alert('Registro Alterado com sucesso');</script>";
        }
        else{
            echo "<script>alert('Erro: Não foi possível alterar o cadastro');</script>";
        }
       // echo "<script>location.href='../controller/processaSubGenero.php?op=Listar';</script>";
    }

    public function excluirSubGenero($idSubGenero){
        include_once 'Conexao.php';
        $conex=new Conexao();
        $conex->fazConexao();
        $sql="DELETE FROM subgenero WHERE idsubgenero='$idSubGenero'";
        $res=$conex->conn->query($sql);
        if($res){
            echo "<script>alert('Exclusão realizada com sucesso!');</script>";
        }
        else{
            echo "<script>alert('Não foi possível excluir o usuário!');</script>";
        }
        echo "<script>location.href='../controller/processaSubGenero.php?op=Listar';</script>";
    }
}
?>