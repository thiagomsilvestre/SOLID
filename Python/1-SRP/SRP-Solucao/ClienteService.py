from ClienteRepository import ClienteRepository

class ClienteService:
    def adicionarCliente(self, cliente):
        if (not cliente.isValid()):
            return 'Dados inválidos'
        
        ClienteRepository().adicionarCliente(cliente)
        
        return 'ClienteService: Cliente cadastrado com sucesso \n'