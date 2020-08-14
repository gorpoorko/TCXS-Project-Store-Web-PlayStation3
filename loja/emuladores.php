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
<!-- INICIO DOS  JOGOS PARA DOWNLOAD -->

<div class="menus_home">

<!-- id:1001 handler:start | TCXS Project Emuladores | Emulador) -->
  <button id="emu1" class="colunas_home"  type="button" onclick="window.location.href='#janela_retroarch';" 
autofocus><img src="imagens/emuladores/menu_retroarch.jpg"></button>
<div id="janela_retroarch" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/emuladores/retroarch.jpg"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Retroarch <br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: Emulador</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/sqi9t251n8j8pxa/UP0000-SLUS20223_00-PS2CLASSICS00000.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:1001 handler:end | TCXS Project Emuladores | Emulador -->




<!-- id:1001 handler:start | TCXS Project Emuladores | Emulador) -->
  <button id="emu2" class="colunas_home"  type="button" onclick="window.location.href='#janela_megadrive';" 
autofocus><img src="imagens/emuladores/menu_megadrive.jpg"></button>
<div id="janela_megadrive" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/emuladores/pgen.jpg"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Mega Drive: PGEN <br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: Emulador</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/d4zlz6ey1xcm989/UP0000-SLUS00000_00-PS2CLASSICS00000.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:1001 handler:end | TCXS Project Emuladores | Emulador -->


 <!-- id:1001 handler:start | TCXS Project Emuladores | Emulador) -->
  <button id="emu3" class="colunas_home"  type="button" onclick="window.location.href='#janela_supernintendo';" 
autofocus><img src="imagens/emuladores/menu_snes.jpg"></button>
<div id="janela_supernintendo" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/emuladores/snes.jpg"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Super Nintendo: SnesStation <br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: Emulador</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/q4miivo3x1ri61h/UP0000-SLUS00001_00-PS2CLASSICS00000.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:1001 handler:end | TCXS Project Emuladores | Emulador -->


 <!-- id:1001 handler:start | TCXS Project Emuladores | Emulador) -->
  <button id="emu4" class="colunas_home"  type="button" onclick="window.location.href='#janela_nes';" 
autofocus><img src="imagens/emuladores/menu_nes.jpg"></button>
<div id="janela_nes" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/emuladores/nes.jpg"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Nintendo System: NES <br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: Emulador</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/kjlgbgfvhf7yc3f/UP9000-SLUS00886_00-0000000000000001.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:1001 handler:end | TCXS Project Emuladores | Emulador -->

 <!-- id:1001 handler:start | TCXS Project Emuladores | Emulador) -->
  <button id="emu5" class="colunas_home"  type="button" onclick="window.location.href='#janela_mastersystem';" 
autofocus><img src="imagens/emuladores/menu_mastersystem.jpg"></button>
<div id="janela_mastersystem" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/emuladores/mastersystem.jpg"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Master System <br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: Emulador</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/vy2uv77opfpkd9v/EP0000-SLES66654_00-PS2CLASSICS00000.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:1001 handler:end | TCXS Project Emuladores | Emulador -->

 <!-- id:1001 handler:start | TCXS Project Emuladores | Emulador) -->
  <button id="emu6" class="colunas_home"  type="button" onclick="window.location.href='#janela_atari';" 
autofocus><img src="imagens/emuladores/menu_atari.jpg"></button>
<div id="janela_atari" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/emuladores/atari.jpg"  width="170" height="170"/></div>
<div ><p class='textoJogoPS3'>Atari<br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: Emulador</p>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fspf83xq224jf5j/UP9000-SLUS00777_00-0000000000000001.pkg?dl=1';" autofocus>Parte1</button><button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/p8ggd3q8kej31hq/UP0000-SLUS20273_00-PS2CLASSICS00000.pkg?dl=1';" autofocus>Parte2</button><button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/rqyfa2o21v5kl7d/UP0000-SLUS21076_00-PS2CLASSICS00000.pkg?dl=1';" autofocus>Parte3</button></div></div></div>
<!-- id:1001 handler:end | TCXS Project Emuladores | Emulador -->


 <!-- id:1001 handler:start | TCXS Project Emuladores | Emulador) -->
  <button id="emu7" class="colunas_home"  type="button" onclick="window.location.href='#janela_gba';" 
autofocus><img src="imagens/emuladores/menu_gba.jpg"></button>
<div id="janela_gba" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/emuladores/gba.jpg"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Game Boy Advanced<br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: Emulador</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/sqi9t251n8j8pxa/UP0000-SLUS20223_00-PS2CLASSICS00000.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:1001 handler:end | TCXS Project Emuladores | Emulador -->


<div>


<!-- script de bloqueio para que não rode em outra plataforma que não seja o cosole PlayStation3 
<script>
		writeEnvInfo();
		ps3chk();
</script> -->
</body>
</html>
<font color="#91060d"><footer id="det" style="position:fixed; left:0px; right:0px; bottom:0px; background:rgb(0,0,0); text-align:center; border-top: 1px solid #91060d; border-bottom: 1px solid #91060d"><font color="#91060d" face="Tahoma" size="2"><font color="91060d"><b> TCXS Project PlayStation3 Store  |  2020  |  HAN HEN CFW  |  Nunca compartilhe seu login se sua conta for acessada de outro IP você será banido.</b></font>