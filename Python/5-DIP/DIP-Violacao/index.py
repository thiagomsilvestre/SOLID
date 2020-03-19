from Cliente import Cliente
from ClienteService import ClienteService

if __name__ == "__main__":
    clienteService = ClienteService()
    cliente = Cliente(1, 'Mateus', 'mateus@server.com', '1111111111')
    print(clienteService.adicionarCliente(cliente))