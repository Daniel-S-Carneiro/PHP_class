<?php

class A {
    public function example() {
        return new self;
    }
}

class B extends A {

}

$b = new B();
$obj = $b->example();

echo get_class($obj), PHP_EOL;

// Saída:
// A