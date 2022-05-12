<?php
// self deve ser utilizado para referenciar a classe onde é aplicado;

class A {
    public function example() {
        return new self;
        // A referência em self aponta sempre para a própria classe onde é utilizado.
    }
}

class B extends A {

}

$b = new B();
$obj = $b->example();

echo get_class($obj);

// Saída:
// A