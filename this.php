<?php
// this deve ser utilizado para referenciar a instância corrente;

class A {
    function example() {
        echo "Eu sou a Class A::exemplo().<br />\n";
    }
}

class B extends A {
    function example() {
        echo "Eu sou a Class B::exemplo().<br />\n";
    }

    function main() {
        $this->example();
        //Referência à própria instância, tudo que pertence a instância estará disponível em $this.
    }
}

$b = new B;

// Chamando Class B::exemplo().
$b->main();

// Saída:
// Class B::exemplo().