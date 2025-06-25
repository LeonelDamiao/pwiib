<?include "conexao.php";
require_once "repository/PerguntaRepository.php";
$repo = new PerguntaRepository($conexao);


if( isset($_POST["salvar_pergunta"]) )
{
    $repo->Inserir($_POST['PERGUNTA'], $_POST['id_disciplina']);
    header('location: pergunta.php?sucesso=cadastrado com sucesso');
}
else
{
    header('location: pergunta.php?erro=formulario inválido');
}

?>