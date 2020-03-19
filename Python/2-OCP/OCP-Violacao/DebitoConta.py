class DebitoConta:
    def __init__(self):
        self.Corrente = 1
        self.Poupanca = 2
        pass
    
    def debitar(self, valor: int, conta: str, tipo: int):
        if tipo == self.Corrente:
            print('Corrente')
        
        if tipo == self.Poupanca:
            print('Poupanca')
            # Valida Aniversário da Conta
            # Debita Conta Poupança