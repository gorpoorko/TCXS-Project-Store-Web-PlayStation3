

import  os
import pathlib
import sqlite3
from bs4 import BeautifulSoup



#variavies iniciais
dados = open('xml_pai/PS1.xml', 'r', encoding="utf-8").read()
dados_xml = BeautifulSoup(dados, "xml")
key_icon = dados_xml.find_all('Pair', {'key':'icon'},'String')
key_nome_xml = dados_xml.find_all('Query')

print(key_nome_xml)
#le todos nomes de xml no xml pai---------------->
xmls = []
for xml in key_nome_xml:
    try:
        xml = str(xml).split('#')[0].split('PS1/')[1]  #pega o nome de todos arquivos xml no xml pai
        #print(nome_xml)
        xmls.append(xml)
    except:
        pass
nome_xml = sorted(xmls) #sorted poe em ordem alfabetica
print(nome_xml)

#le o nome de todos icones no xml pai---------------->
icones = []
for icone in key_icon:
    print(icone)
    icone = str(icone).split('PS1/')[1].split('<')[0]
    if icone == 'aviso.png' or icone == 'inf.png':
        pass
    else:
        icones.append(icone)
nome_icone = sorted(icones) #sorted poe em ordem alfabetica
print(nome_icone)

dicionario_jogos = dict(zip(list(nome_icone),list(nome_xml)))#--


contador = 0
id = 1000
for path in pathlib.Path("xml_jogos/PS1").iterdir():
    if path.is_file():
        current_file = open(path, "r").read()
        dados_xml = BeautifulSoup(current_file, "xml")
        titulo = str(dados_xml.find('Pair', {'key':'title'},'String').find_all('String')).split()[2].split('<')[0]
        link = str(dados_xml.find('Pair', {'key':'module_action'},'String').find_all('String')[0])[8:-9]
        imagem = nome_icone[contador]
        xml = nome_xml[contador]
        contador = contador + 1
        id = id + 1

        texto = f"""
<!-- id:{id} handler:start | TCXS Project PS1 | {titulo}) -->
<button id="btn{id}" class="caixa_imagem"  type="button" onclick="window.location.href='#janela_{titulo}';" 
autofocus>
<img src="imagens/ps1/{imagem}"></button>
<div id="janela_{titulo}" class="janelaDownload">
<div><a href="#" class="botao_fechar">X</a>
<div class="imagem_pequena"><img src="imagens/ps1/{imagem}"  width="170" height="170"/></div>
<div ><p class='textoJogo'>Jogo: {titulo}<br>
Idioma: Ingles<br>
Legenda: Ingles<br>
Plataforma: PlayStation1</p>
<button  class="botaoDownload" type="button" onclick="window.location.href='https://www.dropbox.com/s/link_do_jogo.pkg?dl=1';" autofocus>  --> Download</button></div></div></div>
<!-- id:{id} handler:end | TCXS Project | {titulo} -->
\n"""

        gravar = open('ps1_pronto.txt','a')
        gravar.write(texto)
gravar.close()



