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



$datadehoje = date('Y-m-d H:i:s'); // pega a data de hoje e insere na variável
// preciso achar um calculo aqui
$timestamp_dt_atual = strtotime($datadehoje. ' - 33 days');    // aqui transformamos a data de hoje em timestamp unix, um modelo padrão 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$ip = $_SERVER['REMOTE_ADDR']; 
//seleciona tudo da tabela usuario e confere o nome e senha | a data é inserida manualmente
$query = "select nome from usuarios where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

//verifica os dados de login, se estiverem certos redireciona para a página
if($row == 1) {
	$sql= "SELECT (data_cadastro) from usuarios where usuario = '$usuario'";  // vai selecionar a data do usuario que tiver na variavel
	$sqlpassar = mysqli_query($conexao, $sql); // passamos a conexao entre a query novamente
	$rowzinha = mysqli_fetch_array($sqlpassar);   // aqui vamos pegar o array da variavel anterior
	$roz = $rowzinha['data_cadastro'];   // vamos falar que a variavel $roz é o array da data, ou seja, vai selecionar a data daquele usuário
	$timestamp_dt_expira = strtotime($roz);   // vamos converter novamente a variavel (roz) que guarda a data do usuário para timestamp unix
	

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
	
	//se o login do usuario ocorrer ele vai para a pagina Location:
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];




	if ($timestamp_dt_expira > $timestamp_dt_atual){   // aqui continua o código, achando uma linha, ele vai conferir de a data de expiração é maior que a data atual, caso sim, então o usuário é permitido logar no sistema e acessar o conteúdo
     $_SESSION['usuario'] = $usuario;   // abre a sessão pro usuario
    
	//leva o usuario caso logado para a pagina:
	header('Location: loja/index.php');
exit();} else {
	//apaga o usuario do sistema de login
	$delUser = "DELETE FROM usuarios WHERE usuario = '$usuario'";
	if($conexao->query($delUser) === TRUE) {
	}
	// se o login tiver expirado, deleta a tabela e os dados do usuario para nao armazenar lixo
	$sqlo = "DROP TABLE  $usuario";
	if($conexao->query($sqlo) === TRUE) {
	}


	//leva o usuario de novo par a home, mas podia avisar q tem q doar de novo
	header('Location: ./index.php');
}

	
	$conexao->close();
//se o login estiver errado ou não existir mantem o usuario na home, mas pode levar para outra pagina de aviso.	
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ./index.php');
	exit();
}