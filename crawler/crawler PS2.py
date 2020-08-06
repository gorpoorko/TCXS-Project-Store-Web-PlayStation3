import  os
import pathlib
import sqlite3
from bs4 import BeautifulSoup
#variavies iniciais
dados = open('xml_pai/ps2.xml', 'r', encoding="utf-8").read()
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
        imagem = str(imagem).split('PS2/')[1].split('<')[0]
        imagens.append(imagem)
        pass
    except:
        pass

#print(imagens)
#print(titulos)


dicionario_jogos = dict(zip(list(titulos),list(imagens)))
#ordem alfabetica com sorted pois pegou tudo zuado
contador = 0
id = 2000
for titulo in sorted(dicionario_jogos):
    imagem = dicionario_jogos[titulo]
    contador = contador + 1
    id = id + 1

    texto = f"""
<!-- id:{id} handler:start | TCXS Project PS2 | {titulo}) -->
<button id="btn{id}" class="caixa_imagem"  type="button" onclick="window.location.href='#janela_{titulo}';" 
autofocus>
<img src="imagens/ps2/{imagem}"></button>
<div id="janela_{titulo}" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/ps2/{imagem}"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Jogo: {titulo}<br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: PlayStation2</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/link_do_jogo.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:{id} handler:end | TCXS Project | {titulo} -->
\n"""

    gravar = open('ps2_pronto.txt','a')
    gravar.write(texto)
gravar.close()


