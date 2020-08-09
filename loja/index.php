<!-- ████████╗ ██████╗██╗  ██╗███████╗    ██████╗ ██████╗  ██████╗      ██╗███████╗ ██████╗████████╗
    ╚══██╔══╝██╔════╝╚██╗██╔╝██╔════╝    ██╔══██╗██╔══██╗██╔═══██╗     ██║██╔════╝██╔════╝╚══██╔══╝
       ██║   ██║      ╚███╔╝ ███████╗    ██████╔╝██████╔╝██║   ██║     ██║█████╗  ██║        ██║   
       ██║   ██║      ██╔██╗ ╚════██║    ██╔═══╝ ██╔══██╗██║   ██║██   ██║██╔══╝  ██║        ██║   
       ██║   ╚██████╗██╔╝ ██╗███████║    ██║     ██║  ██║╚██████╔╝╚█████╔╝███████╗╚██████╗   ██║   
       ╚═╝    ╚═════╝╚═╝  ╚═╝╚══════╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   -->
<!-- @Gorpo Orko - 2020 -->

<?php
session_start();
if(!$_SESSION['nome']) {
  header('Location: ../nao_logado.php');
  exit();
}
?>
<!DOCTYPE html>
  <html>
    <head>
      <script src="gorpo.js"></script>
      <meta charset="UTF-8">
      <meta http-equiv="refresh" content="120">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://kit.fontawesome.com/a80232805f.js" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <title>TCXS Project 2021</title>
    </head>
<body>
  <div class="navigation-bar">
  <div id="navigation-container">
    <a href='index.html'><img class="logo" src="imagens/logo.png"></a>
    <ul>
      <li><a href="psp.php">PlayStation PSP</a></li>
      <li><a href="ps1.php">PlayStation1</a></li>
      <li><a href="ps2.php">PlayStation2</a></li>
      <li><a href="ps3.php">PlayStation3</a></li>
      <li><a href="emuladores.php">Emuladores</a></li>
      <li><a href="stuff.php">PSN Stuff</a></li>
    </ul> 
  </div> </div>

                
<div class="panel-heading">
<div class="panel-body">
Olá <?php echo $_SESSION['nome'];?> | IP: <?php echo $_SERVER['REMOTE_ADDR'];?>
<script type="text/javascript">
var OSNome = "";
if (window.navigator.userAgent.indexOf("Windows NT 10.0")!= -1) OSNome="Windows 10";
if (window.navigator.userAgent.indexOf("Windows NT 6.2") != -1) OSNome="Windows 8";
if (window.navigator.userAgent.indexOf("Windows NT 6.1") != -1) OSNome="Windows 7";
if (window.navigator.userAgent.indexOf("Windows NT 6.0") != -1) OSNome="Windows Vista";
if (window.navigator.userAgent.indexOf("Windows NT 5.1") != -1) OSNome="Windows XP";
if (window.navigator.userAgent.indexOf("Windows NT 5.0") != -1) OSNome="Windows 2000";
if (window.navigator.userAgent.indexOf("Mac")            != -1) OSNome="Mac/iOS";
if (window.navigator.userAgent.indexOf("X11")            != -1) OSNome="UNIX";
if (window.navigator.userAgent.indexOf("Linux")          != -1) OSNome="Linux";
if (window.navigator.userAgent.indexOf("5.0 (") + 19, ua.indexOf(") Apple") != -1) OSNome="PlayStation3";
//var fwVersion = ua.substring(ua.indexOf("5.0 (") + 19, ua.indexOf(") Apple"));
document.write(' | Sistema: '+ OSNome);
</script> 
</div></div>



<div class="menus_home">

  <button id="home1" class="colunas_home"  type="button" onclick="window.location.href='psp.html';" autofocus>
  <img src="imagens/menus/psp.jpg"></button>


  <button id="home2" class="colunas_home"  type="button" onclick="window.location.href='ps1.html';" autofocus>
  <img src="imagens/menus/ps1.jpg"></button>

  <button id="home3" class="colunas_home"  type="button" onclick="window.location.href='ps2.html';" autofocus>
  <img src="imagens/menus/ps2.jpg"></button>

  <button id="home4" class="colunas_home"  type="button" onclick="window.location.href='ps3.html';" autofocus>
  <img src="imagens/menus/ps3.jpg"></button>

  <button id="home5" class="colunas_home"  type="button" onclick="window.location.href='emuladores.html';" autofocus>
  <img src="imagens/menus/emuladores.jpg"></button>

  <button id="home6" class="colunas_home"  type="button" onclick="window.location.href='stuff.html';" autofocus>
  <img src="imagens/menus/psn_stuff.jpg"></button>

<div>


















<!-- SIC 002 | script de bloqueio para que não rode em outra plataforma que não seja o cosole PlayStation3 
<script>
		writeEnvInfo();
		ps3chk();
    document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
</script> 
 <footer class="footer">
  <div class="texto_rodape"><h1>PLAYSTATION3 STORE | 2020 | HEN | HAN | CFW</h1></div>    
</footer>
	</body>
</html>
