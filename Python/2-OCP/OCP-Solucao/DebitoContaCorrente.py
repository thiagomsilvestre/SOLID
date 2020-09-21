from DebitoConta import DebitoConta

class DebitoContaCorrente(DebitoConta):
    def debitar(self, valor: float, conta: str):
        print('Debito conta corrente')
        return DebitoConta.formatarTransacao()