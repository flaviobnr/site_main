import telnetlib  # Importa a biblioteca telnetlib

# Define as informações do servidor e porta
server_host = "turmadogueto.net"  # Substitua "exemplo.com" pelo endereço do servidor desejado
server_port = 10333  # Substitua 12345 pela porta desejada

# Tenta estabelecer a conexão telnet com o servidor
try:
    tn = telnetlib.Telnet(server_host, server_port)  # Cria uma instância de Telnet com o servidor e porta especificados
    print("Conexão bem-sucedida com {} na porta {}".format(server_host, server_port))

    # Aqui você pode adicionar comandos Telnet, como enviar dados para o servidor ou receber dados do servidor.
    # Por exemplo, para enviar uma mensagem ao servidor:
     tn.write(b"Olá, servidor!\n")
    
    # Para receber dados do servidor, você pode usar tn.read() ou tn.read_until() conforme necessário.
tn.read_until() 
    # Feche a conexão Telnet quando terminar
    tn.close()
    print("Conexão encerrada.")
    
except Exception as e:
    print(f"Erro ao tentar conectar ao servidor: {e}")
input()
