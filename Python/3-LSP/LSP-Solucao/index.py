from CalculoArea import CalculoArea
from Quadrado import Quadrado
from Retangulo import Retangulo

if __name__ == "__main__":
    calcular = CalculoArea()

    quad = Quadrado(5, 5)
    print(quad)
    calcular.obterArea(quad)

    ret = Retangulo(5, 6)
    print(ret)
    calcular.obterArea(ret)