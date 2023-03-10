<?php
// Exemplo de programação procedural
function calcular_area_retangulo($largura, $altura) {
  $area = $largura * $altura;
  return $area;
}

echo "A área do retângulo pela função procedural é: " . calcular_area_retangulo(5, 8) .  "\n";

// Exemplo de programação orientada a objetos
class Retangulo {
  private $largura;
  private $altura;

  public function __construct($largura, $altura) {
    $this->largura = $largura;
    $this->altura = $altura;
  }

  public function calcular_area() {
    $area = $this->largura * $this->altura;
    return $area;
  }
}

$retangulo = new Retangulo(5, 8);
echo "A área do retângulo pela classe orientada a objetos é: " . $retangulo->calcular_area() .  "\n";

// Exemplo de programação funcional
$altura = 8;
$calcular_area = function($largura) use ($altura) {
  return $largura * $altura;
};

echo "A área do retângulo pela função funcional é: " . $calcular_area(5) .  "\n";
// Neste exemplo, temos três maneiras diferentes de calcular a área de um retângulo:
// uma função procedural calcular_area_retangulo(), 
// uma classe orientada a objetos Retangulo,
// e uma função funcional $calcular_area. 
// Isso demonstra como o PHP suporta diferentes paradigmas de programação e pode ser usado de várias maneiras para resolver um problema.
?>