from DebitoConta import DebitoConta

class DebitoContaInvestimento(DebitoConta):
    def debitar(self, valor: float, conta: str):
        print('Debito conta Investimento')
        return DebitoConta.formatarTransacao()