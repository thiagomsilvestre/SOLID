from Retangulo import Retangulo
from Quadrado import Quadrado

def imprimir(ret: Retangulo):
    print("\n Cálculo da área do Retângulo") 
    print("\n Altura -> " + ret.altura) 
    print("\n Largura -> " + ret.largura) 
    print("\n Área -> " + ret.area()) 

def verificar(r: Retangulo):
    if r.area() != 50:
        raise Exception('Area Errada!')
    return True

if __name__ == "__main__":
    ret = Retangulo()
    ret.setLargura(10)
    ret.setAltura(5)
    imprimir(ret)
    verificar(ret)

    quad = Quadrado()
    quad.setLargura(10)
    quad.setAltura(5)
    imprimir(quad)
    verificar(quad)
