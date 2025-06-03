<?php
class UsuarioRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM disciplina");

        $usuarios = [];
        while ($row = $result->fetch_assoc()) {
            array_push($disciplina, $row);
        }
        return $disciplina;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM disciplina WHERE LOGIN like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $disciplina = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($disciplina, $row);
        }
        return $disciplina;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplina WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function verificarLogin($login, $senha) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplina WHERE Login = ? && Senha = ?");
        $stmt->bind_param("ss", $login, $senha);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }


    public function Inserir($login, $senha, $ativo)
    {
        echo $ativo;
        
        $sql = "INSERT INTO usuarios (LOGIN, SENHA, ATIVO) 
                VALUES (?, ?, ?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("ssi", $login,$senha,$ativo);
                $stmt->execute();
    }

    public function Editar($login, $id, $ativo)
    {
        $sql = "UPDATE usuarios set LOGIN = ?, ATIVO = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("sii", $login,$ativo,$id);
                $stmt->execute();
    }



    public function excluirdisciplina($id)
    {
        $sql = "DELETE FROM disciplina where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}