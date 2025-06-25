<?php
class perguntaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $result = $this->conexao->query(
            "SELECT * FROM pergunta");

        $pergunta = [];
        while ($row = $result->fetch_assoc()) {
            array_push($pergunta, $row);
        }
        return $pergunta;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM pergunta WHERE LOGIN like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $pergunta = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($pergunta, $row);
        }
        return $disciplina;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM pergunta WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    public function verificarLogin($login, $senha) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM pergunta WHERE Login = ? && Senha = ?");
        $stmt->bind_param("ss", $login, $senha);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }


    public function Inserir($pergunta)
    {
    
        
        $sql = "INSERT INTO perguntas (pergunta) 
                VALUES (?);";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $pergunta);
                $stmt->execute();
    }

    public function Editar($login, $id, $ativo)
    {
        $sql = "UPDATE usuarios set LOGIN = ?, ATIVO = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("sii", $login,$ativo,$id);
                $stmt->execute();
    }



    public function excluirpergunta($id)
    {
        $sql = "DELETE FROM pergunta where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}