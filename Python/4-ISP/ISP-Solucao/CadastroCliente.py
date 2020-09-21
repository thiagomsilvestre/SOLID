from Interfaces.ICadastroCliente import ICadastroCliente

class CadastroCliente(ICadastroCliente):
    def validarDados(self):
        print('Validar dados')
    
    def salvarBanco(self):
        print('Salvar banco')
    
    def enviarEmail(self):
        print('Enviar e-mail')