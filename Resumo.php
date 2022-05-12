<?php

// parent deve ser utilizado quando precisa referenciar a classe pai;

// Faz referência a classe pai que foi herdada pela classe atual.
// Basicamente foi criado para que você não precise, dentro da classe filha,
// ficar explicitando qual é a classe pai de onde será chamado o método,
// acessar o atributo, constante, etc.


// this deve ser utilizado para referenciar a instância corrente;

// Referência à própria instância. Tudo que pertence a instância estará disponível em $this.
// Métodos estáticos e constantes pertencem à própria classe e, portanto,
// não são acessível neste objeto (em PHP). Adaptando um pouco o exemplo anterior, podemos fazer:


// self deve ser utilizado para referenciar a classe onde é aplicado;

// A referência em self aponta sempre para a própria classe onde é utilizado e é essa a diferença para o static.
// Ao utilizar self em A, a referência será para a classe A e quando utilizado em B a referência será a B.
// Isso influencia muito, por exemplo, quando você quer definir o retorno em um método:


// static deve ser utilizado para referenciar a classe da instância onde é aplicado.

// Semelhante ao self o static sempre fará referência à classe da instância utilizada.
// As vezes, o comportamento do static é resumido como um self preguiçoso,
// pois ele não define a referência na hora. Executando o mesmo exemplo acima, alterando self para static, temos: