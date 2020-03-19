from Interfaces.ICadastroProduto import ICadastroProduto

class CadastroProduto(ICadastroProduto):
    def validarDados(self):
        print('Validar dados')
    
    def salvarBanco(self):
        print('Salvar banco')
