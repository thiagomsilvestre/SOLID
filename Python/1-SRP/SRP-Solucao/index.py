from Cliente import Cliente
from ClienteService import ClienteService
from EmailService import EmailService

if __name__ == "__main__":
    clienteService = ClienteService()
    cliente = Cliente(1, 'Mateus', 'mateus@server.com', '1111111111')
    clienteService.adicionarCliente(cliente)
    EmailService().enviar("empresa@empresa.com", cliente.nome, cliente.email, "Bem Vindo", "Parabéns está Cadastrado")