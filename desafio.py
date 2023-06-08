import string

def verificarSenha(senhas):
    if len(senhas) < 6:
        return False

    letraMaiuscula = any(char.isupper() for char in senhas)
    letraMinuscula = any(char.islower() for char in senhas)
    caracterEspecial = any(char in string.punctuation for char in senhas)
    print(letraMaiuscula)
    return letraMaiuscula and letraMinuscula and caracterEspecial

# Array de senhas
arraySenhas = [
    "#forTe1",         
    "senhafraca",       
    "Qu@s1",          
    "Voce@Consegue"
    ]

# Imprimir senhas fortes
senhasFortes = [senhas for senhas in arraySenhas if verificarSenha(senhas)]
for senhas in senhasFortes:
    print(senhas)