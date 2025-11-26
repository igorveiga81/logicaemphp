<!-- tipo de documento -->

<!DOCTYPE html>
<html lang="pt-br"> <!-- liguagem -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title> <!-- titulos html -->
</head>
<body>
    <h2>
        <?php
          echo "Meu primeiro php \u{1F60E}"; // adicionar emojis

          /*
          isso e um comentaeio
           de variasa
            linhas*/

            // Quebra de linha antes do proximo echo
          echo "<br>  <br>";
           $nome = "igor"; // varivel nome
           $sobrenome = "oliveira"; // variavel sobrenome

           // a variavel pode ser mudada
           $nome = "igor veiga";

        echo "seja bem-vida, $nome $sobrenome";
         echo "<br>  <br>";

        const time = "cruzeiro"; // nao e possivel alterar uma constante, sempre sera a primeira constante
        echo "meu time de futebol é " . time;
        echo "<br> <br>";
        echo "seja bem vida,  $nome $sobrenome seu time é " . time;

        echo "<br>  <br>";

        // tipos de dados
        $sobrenome = "guimaraes"; // string , testos
        $idade = 27; // int sempre sera numeros inteiros
        $peso = 90; // float variavel com casa decimal
        $casado = false; //boolean so vai receber dois tipos de dados verdadeiro ou falso

        echo "$sobrenome $idade $peso";
         echo "<br>  <br>";


        // metodo 1 usando var_dump para exibir o valor booleano
        var_dump($casado);

         echo "<br>  <br>";

        // metodso 2 usando uma xconversai em string

        echo ($casado ? "casado"  : "nao casado");
         echo "<br>  <br>";

         // tipos primitivos
        var_dump($sobrenome);
        echo "<br>";
        var_dump($idade);
        echo "<br>";
        var_dump($peso);

        echo "<br> <br>";
        
        $frase = "meu time de futebol e " . time;
        $frase2 = " meu nome e $nome meu nome e $sobrenome";
        echo($frase);
        echo "<br>";
        echo($frase2);
        
        
        ?> <!-- para finalizar o progama em php-->
       
    </h2>
    <p>meu primeiro paragrafo</p> <!-- paragafos em html-->
    
</body>
</html>