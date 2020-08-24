<!-- ████████╗ ██████╗██╗  ██╗███████╗    ██████╗ ██████╗  ██████╗      ██╗███████╗ ██████╗████████╗
    ╚══██╔══╝██╔════╝╚██╗██╔╝██╔════╝    ██╔══██╗██╔══██╗██╔═══██╗     ██║██╔════╝██╔════╝╚══██╔══╝
       ██║   ██║      ╚███╔╝ ███████╗    ██████╔╝██████╔╝██║   ██║     ██║█████╗  ██║        ██║   
       ██║   ██║      ██╔██╗ ╚════██║    ██╔═══╝ ██╔══██╗██║   ██║██   ██║██╔══╝  ██║        ██║   
       ██║   ╚██████╗██╔╝ ██╗███████║    ██║     ██║  ██║╚██████╔╝╚█████╔╝███████╗╚██████╗   ██║   
       ╚═╝    ╚═════╝╚═╝  ╚═╝╚══════╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   -->
<!-- @Gorpo Orko - 2020 -->

<?php
session_start();
//inclui o arquivo de conexao com banco de dados
include('../conexao.php');

//conexao com banco de dados para pegar a data
$usuario = mysqli_real_escape_string($conexao, $_SESSION['nome']);
$sql= "SELECT (data_cadastro) from usuarios where usuario = '$usuario'"; //pega o usuario no banco de dados
$sqldata = mysqli_query($conexao, $sql); //conexao com a query
$rowdata = mysqli_fetch_array($sqldata); //array da variavel
$datacadastrada = $rowdata['data_cadastro']; //seleciona a data do usuario

//formata a data de entrada do usuario
$strdata = strtotime($datacadastrada);
$data_entrada_usuario = date('d-m-Y', $strdata);

//formata a data de expiração do usuario
$data_expira = strtotime($datacadastrada. '+33 days');
$data_expira_formatada = date('d-m-Y', $data_expira);


//se usuario e senha estiverem vazios leva o usuario para pagina de donate com codigo qr
if(!$_SESSION['nome']) {
  header('Location: ../nao_logado.php');
  exit();
}

?>



<!DOCTYPE html>
  <html>
    <head>
      <!-- <script src="gorpo.js"></script> -->
      <meta charset="UTF-8">
      <meta http-equiv="refresh" content="120">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta property="og:site_name" content="TCXS Project PlayStation3"/>
      <meta property="og:title" content="TCXS Project PlayStation3"/>
      <meta property="og:url" content="https://tcxsproject.com.br/"/>
      <meta property="og:description" content="Para adquirir sua versão mais atual da TCXS Project Store PKG para o console PlayStation3 clique no botão COMO ADQUIRIR e leia todas as regras, após isto já fazer sua doação. Aceitamos todos os tipos de pagamento como cartão, pagamento online"/>
      <meta property="og:image" content="imagens/logo.png"/>
      <link rel="shortcut icon" href="imagens/icon.png" />
      <script src="https://kit.fontawesome.com/a80232805f.js" crossorigin="anonymous"></script>
      <!-- <script src="js/script.js"></script> -->
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <title>TCXS Project PlayStation3 Store</title>
    </head>
<body>
  <!-- menus do topo -->
<script>document.oncontextmenu = document.body.oncontextmenu = function() {return false;}</script>
  <div class="navigation-bar">
  <div id="navigation-container">
    <a href='index.php'><img class="logo" src="imagens/logo.png"></a>
    <ul>
      <li><a href="psp.php">PlayStation PSP</a></li>
      <li><a href="ps1/ps1_AL.php">PlayStation1</a></li>
      <li><a href="ps2/ps2_AL.php">PlayStation2</a></li>
      <li><a href="ps3/ps3_AE.php">PlayStation3</a></li>
      <li><a href="emuladores.php">Emuladores</a></li>
      <li><a href="televisao/tv.php">IPTV</a></li>
    </ul> 
  </div> </div>
  



                
<!-- mensagem de boas vindas mostrando ip e sistema operacional -->
<center>
<div style="color: #AD0000; background-color: #000000;width: 1200px;  border: none; margin-left: 17px;">
<h2>Olá <?php echo $_SESSION['nome'];?> bem vindo a nova TCXS Store</h2>

<div class="aviso_home">
<div class='bordinhaHome'>
<!-- mensagem informando nome, ip, data de entrada, prazo, funçao feita com javascript + php -->
<code>Seu IP: <?php echo $_SERVER['REMOTE_ADDR'];?></code><br>
<code>Data de Entrada: <?php echo  $data_entrada_usuario ?></code><br>
<code>Data de Expiração: <?php echo  $data_expira_formatada ?></code><br>
<code>Versão : version_4.0 HAN | HEN | CFW</code><br>
<code>Sistema : Exclusiva para PlayStation3</code><br>
<code>Autores : Mitsuki | Mst3dz | Gorpo</code><br>
<code>PlayStation Store : TCXS Project Store</code><br>
</div>

<div class="bordinha2Home">
<ul>
<h3>Atenção! Informações importantes:</h3>
<li>Para acelerar seus downloads use nosso Tutorial de Proxy.</li>
<li>Usuários HEN e CFW podem salvar seus jogos no HD do console.</li>
<li>Usuários HAN precisam de pendrive ou hd externo na USB devido limitação do HAN.</li>
<li>Downloads segundo plano não tem funcionado, faça os downloads de forma normal.</li>
<li>Em caso de links quebrados informe no grupo para que sejam corrigidos.</li>
<li>Convertemos, upamos e inserimos na loja mantendo o catálogo atualizado.</li>
<li>Temos jogos legendados/dublados conforme obtemos nas comunidades parceiras.</li>
<li>As atualizações são automáticas, são feitas atualizações quinzenais.</li>
<li>Nossos jogos de PlayStation3 funcionarão mesmo que você remova seu exploit.</li>
<li>Todos jogos de PlayStation3 são NO-HAN | NO-HEN, não precisam de licenças.</li>
<li>Ao vencer seu login automáticamente ele deixará de funcionar.</li>
<li>Não compartilhe seu login, ou será banido, isto é automático da programação.</li>
<li>Jogos baixados seguem sendo seus mesmo que o login tenha vencido.</li>



</ul>
</div></div>

</div>
</center>
















</body>
</html>
<font color="#91060d"><footer id="det" style="position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #91060d; border-bottom: 1px solid #91060d"><font color="#91060d" face="Tahoma" size="2"><font color="91060d"><b> TCXS Project PlayStation3 Store  |  2020  |  HAN HEN CFW  |  Nunca compartilhe seu login se sua conta for acessada de outro IP você será banido.</b></font>
