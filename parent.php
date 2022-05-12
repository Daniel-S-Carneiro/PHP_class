<?php
// parent deve ser utilizado quando precisa referenciar a classe pai;

class A {
    function example() {
        echo "Eu sou a Class A::exemplo().<br />\n";
    }
}

class B extends A {
    function example() {
        echo "Eu sou a Class B::exemplo().<br />\n";
        parent::example();
        //Faz referência a classe pai que foi herdada pela classe atual.
    }
}

$b = new B;

// Chamando Class B::exemplo(), que por sua vez chamará A::example().
$b->example();

// Saída:
// Class A::exemplo().
// Class B::exemplo().
