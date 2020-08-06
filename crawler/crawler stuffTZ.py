
import  os
import pathlib
import sqlite3
from bs4 import BeautifulSoup



#variavies iniciais
dados = open('xml_pai/psn_tz.xml', 'r', encoding="utf-8").read()
dados_xml = BeautifulSoup(dados, "xml")

key_titulo = dados_xml.find_all('Pair', {'key':'title'},'String')
key_descricao = dados_xml.find_all('Pair', {'key':'info'},'String')
key_imagem = dados_xml.find_all('Pair', {'key':'icon'},'String')
key_link = dados_xml.find_all('Pair', {'key':'pkg_src'},'String')

#print(key_titulo)
#print(key_descricao)
#print(key_imagem)
#print(key_link)


titulos = []
for titulo in key_titulo:
    titulo = str(titulo).split('TCXS -')[1].split('<')[0]
    titulos.append(titulo)

descricoes = []
for descricao in key_descricao:
    descricao = str(descricao).split('<String>')[1].split('<')[0]
    if 'net_package_install' not in descricao:
        descricoes.append(descricao)

imagens = []
for imagem in key_imagem:
    imagem = str(imagem).split('_EU/')[1].split('<')[0]
    imagens.append(imagem)

links = []
for link in key_link:
    link = str(link).split('<String>')[1].split('<')[0]
    links.append(link)





for i in range(len(links)):
    texto = f"""
    <!-- id: stuff_{i + 569} handler:start | TCXS Project PSN STUFF | {titulos[i]}) -->
    <button id="btn{i + 569}" class="caixa_imagem"  type="button" onclick="window.location.href='#janela_{titulos[i]}';" 
    autofocus>
    <img src="imagens/stuff/{imagens[i]}"></button>
    <div id="janela_{titulos[i]}" class="janelaDownload">
    <div><a href="#" class="botao_fechar">X</a>
    <div class="imagem_pequena"><img src="imagens/stuff/{imagens[i]}"  width="170" height="170"/></div>
    <div ><p class='textoJogo'>Jogo: {titulos[i]}<br>
    info: {descricoes[i]}<br>
    Plataforma: PlayStation3</p>
    <button  class="botaoDownload" type="button" onclick="window.location.href='{links[i]}';" autofocus>  --> Download</button></div></div></div>
    <!-- id: stuff_{i + 569} handler:end | TCXS Project | {titulos[i]} -->
    \n"""

    gravar = open('stuffTZ_pronto.txt', 'a')
    gravar.write(texto)

gravar.close()

print(len(links) + 569)





