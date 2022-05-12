<?php

class A {
    function example() {
        echo "I am A::example() and provide basic functionality.<br />\n";
    }
}

class B extends A {
    function example() {
        echo "I am B::example() and provide additional functionality.<br />\n";
        parent::example();
    }
}

$b = new B;

// This will call B::example(), which will in turn call A::example().
$b->example();

// Saída:
// I am B::example() and provide additional functionality.
// I am A::example() and provide basic functionality.
