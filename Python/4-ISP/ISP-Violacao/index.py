from CadastroCliente import CadastroCliente
from CadastroProduto import CadastroProduto

if __name__ == "__main__":
    print()
    print('Cadastro cliente')
    
    cadastroCliente = CadastroCliente()
    cadastroCliente.validarDados()
    cadastroCliente.salvarBanco()
    cadastroCliente.enviarEmail()

    print()
    print('Cadastrar produto')

    cadastroProduto = CadastroProduto()
    cadastroProduto.validarDados()
    cadastroProduto.salvarBanco()
    cadastroProduto.enviarEmail()