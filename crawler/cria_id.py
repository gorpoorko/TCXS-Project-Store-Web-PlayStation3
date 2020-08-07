


for i in range(20):
    texto1 = f"enable_element(document.getElementById('emu{i}'));\n"
    with open('id.txt','a') as doc:
        doc.write(texto1)




