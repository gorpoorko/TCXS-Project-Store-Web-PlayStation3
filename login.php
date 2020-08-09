<!-- ████████╗ ██████╗██╗  ██╗███████╗    ██████╗ ██████╗  ██████╗      ██╗███████╗ ██████╗████████╗
     ╚══██╔══╝██╔════╝╚██╗██╔╝██╔════╝    ██╔══██╗██╔══██╗██╔═══██╗     ██║██╔════╝██╔════╝╚══██╔══╝
        ██║   ██║      ╚███╔╝ ███████╗    ██████╔╝██████╔╝██║   ██║     ██║█████╗  ██║        ██║   
        ██║   ██║      ██╔██╗ ╚════██║    ██╔═══╝ ██╔══██╗██║   ██║██   ██║██╔══╝  ██║        ██║   
        ██║   ╚██████╗██╔╝ ██╗███████║    ██║     ██║  ██║╚██████╔╝╚█████╔╝███████╗╚██████╗   ██║   
        ╚═╝    ╚═════╝╚═╝  ╚═╝╚══════╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   -->
<!-- @Gorpo Orko - 2020 -->
<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$ip = $_SERVER['REMOTE_ADDR']; 
//seleciona tudo da tabela usuario e confere o nome e senha | a data é inserida manualmente
$query = "select nome from usuarios where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

//verifica os dados de login, se estiverem certos redireciona para a página
if($row == 1) {
	//cria a tabela com nome do usuario para guardar seu ip
	$sql = "CREATE TABLE IF NOT EXISTS $usuario (
	    usuario VARCHAR(300) ,
	    senha VARCHAR(300) ,
	    ip VARCHAR(70) ,
		data_atual datetime)";	
	//escreve no banco de dados a tabela - caso ela exista nao vai escrever	
	if($conexao->query($sql) === TRUE) {
		$_SESSION['status_cadastro'] = true;
	}
	//$conexao->close();
	//insere os dados na tabela criada para o usuario
	$sqla = "INSERT INTO $usuario (usuario, senha, ip, data_atual) VALUES ('$usuario','$senha','$ip',NOW())";
	if($conexao->query($sqla) === TRUE) {
		$_SESSION['status_cadastro'] = true;
	}
	$conexao->close();
	//se o login do usuario ocorrer ele vai para a pagina Location:
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];

	//leva o usuario caso logado para a pagina:
	header('Location: loja/index.php');

	
	exit();
//se o login estiver errado ou não existir mantem o usuario na home, mas pode levar para outra pagina de aviso.	
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}