from ICadastro import ICadastro

class CadastroProduto(ICadastro):
    
    def validarDados(self):
        print('Validar dados')
    
    def salvarBanco(self):
         print('Salvar banco')
    
    def enviarEmail(self):
        # Produto não tem e-mail, o que eu faço agora???
        raise NotImplementedError('Esse método não serve pra nada')