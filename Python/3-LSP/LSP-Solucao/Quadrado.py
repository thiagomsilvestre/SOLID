from Paralelogramo import Paralelogramo

class Quadrado(Paralelogramo):
    def __init__(self, altura, largura):
        super().__init__(altura, largura)
        
        if self._largura != self._altura:
            raise Exception('Os dois lados do quadrado precisam ser iguais')
        