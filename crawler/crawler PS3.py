import  os
import pathlib
import sqlite3
from bs4 import BeautifulSoup
#variavies iniciais
dados = open('xml_pai/tcxs.xml', 'r', encoding="utf-8").read()
dados_xml = BeautifulSoup(dados, "xml")
key_imagem = dados_xml.find_all('Pair', {'key': 'icon'}, 'String')
key_titulos = dados_xml.find_all('Pair', {'key': 'title'}, 'String')

#le todos nomes de xml no xml pai---------------->
titulos = []
for titulo in key_titulos:
    try:
        titulo = str(titulo).split('-')[1]
        titulos.append(titulo)
        pass
    except:
        pass


#le o nome de todos icones no xml pai---------------->
imagens = []
for imagem in key_imagem:
    try:
        imagem = str(imagem).split('tcxs/')[1].split('<')[0]
        imagens.append(imagem)
        pass
    except:
        pass

print(imagens)
print(titulos)


dicionario_jogos = dict(zip(list(titulos),list(imagens)))
#ordem alfabetica com sorted pois pegou tudo zuado
contador = 0
id = 3000
for titulo in sorted(dicionario_jogos):
    imagem = dicionario_jogos[titulo]
    titulo = titulo.split('<')[0]
    contador = contador + 1
    id = id + 1

    texto = f"""
<!-- id:{id} handler:start | TCXS Project | {titulo} -->
<button id="{id}" class="caixa_imagem"  type="button" onclick="window.location.href='#janela_{titulo}';" autofocus>
<img src="imagens/ps3/{imagem}"></button>
<div id="janela_{titulo}" class="janelaDownloadPS3">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequenaPS3"><img src="imagens/ps3/{imagem}"  width="170" height="170"/></div>
<div ><p class='textoJogoPS3'>Jogo: {titulo}<br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: PlayStation3</p></div>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 01</button>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 02</button>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 03</button>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 04</button>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 05</button>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 06</button>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 07</button>
<button  class="botaoDownloadPS3" type="button" onclick="window.location.href='https://www.dropbox.com/s/fpoohch56ei5otb/UP9000-SCUS94503_00-0000000000000001.pkg?dl=1';" autofocus>Parte 08</button></div></div>
<!-- id:{id} handler:end | TCXS Project | {titulo} -->
\n"""

    gravar = open('ps3_pronto.txt','a', encoding='utf-8')
    gravar.write(texto)
gravar.close()


