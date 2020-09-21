class Paralelogramo:
    def __init__(self, _altura: float, _largura: float):
        self._altura = _altura
        self._largura = _largura

    def area(self):
        return self._largura * self._altura