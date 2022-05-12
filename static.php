<?php
// static deve ser utilizado para referenciar a classe da instância onde é aplicado.

class A {
    public function example() {
        return new static;
        // Semelhante ao self o static sempre fará referência à classe da instância utilizada.
    }
}

class B extends A {

}

$b = new B();
$obj = $b->example();

echo get_class($obj);

// Saída:
// B
