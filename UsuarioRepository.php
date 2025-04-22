<?php
class UsuarioRepository {
    private $conexao;

    public function__construct(mysqli $conexao)
    {
        $this->conexao=$conexao;
    }

    public function buscarTodos()
    {
        $result=$this-> conexao-> query("SELECT*FROM usuarios");
        $usuarios=[];
        while($row=$result->fetch_assoc());
        {
            array_push($usuarios);
        }
        return $usuarios;
    }

        public function buscarPorId($id)
        {
            $stmt=$this->conexao->prepare("SELECT*FROM usuarios WHERE id=?");
            $stmt->bind_param("i",$id);
            $stmt->execute();

            $resultado= $stmt->get_result();
            retun $resultado->fectch_assoc();
        }
    
}

?>