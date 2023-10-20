<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Carros </title>
</head>
<body>
    <?php
        include("classeobj.php");

        //Instancia de um novo objeto
        $carro0 = new Carro();  

        //Atribuindo valores aos atributos
        $carro0->ano = "2012";
        $carro0->modelo = "C4 VTR";
        $carro0->cor = "Preto";
        $carro0->fabricante = "Citroen";
        $carro0->status = "  Disponivel";

        //Instancia de um novo objeto
        $carro1 = new Carro();

        //Atribuindo valores aos atributos
        $carro1->ano = "2014/2015";
        $carro1->modelo = "Corcel 2";
        $carro1->cor = "Amarelo";
        $carro1->fabricante = "Ford";
        $carro1->status = "  Indisponivel";

        //Instancia de um novo objeto
        $carro2 = new Carro();

        //Atribuindo valores aos atributos
        $carro2->ano = "2023/2024";
        $carro2->modelo = "Creta";
        $carro2->cor = "Azul marinho";
        $carro2->fabricante = "Hyundai";
        $carro2->status = "  Disponivel";

        //Instancia de um novo objeto
        $carro3 = new Carro();

        //Atribuindo valores aos atributos
        $carro3->ano = "2021";
        $carro3->modelo = "Dodge Ram Pickup";
        $carro3->cor = "Azul";
        $carro3->fabricante = "FCA US LLC";
        $carro3->status = "  Disponivel";

        //Instancia de um novo objeto
        $carro4 = new Carro();

        //Atribuindo valores aos atributos
        $carro4->ano = "2023";
        $carro4->modelo = "BWM i7";
        $carro4->cor = "Laranja e Preto";
        $carro4->fabricante = "BMW";
        $carro4->status = "  Disponivel";

        //Instancia de um novo objeto
        $carro5 = new Carro();

        //Atribuindo valores aos atributos
        $carro5->ano = "2023";
        $carro5->modelo = "Duster";
        $carro5->cor = "Marrom";
        $carro5->fabricante = "Renault";
        $carro5->status = "  Disponivel";

        //Valores dos objetos
        echo "Carro" . $carro0->status. "<br> <br>";

        echo "Fabricante do Carro: " . $carro0->fabricante . "<br />
                Modelo: " . $carro0->modelo  ."<br>
                Na Cor: " . $carro0->cor . "<br />
                Ano: " . $carro0->ano . "<br /> <hr>";

        //Valores dos objetos
        echo "Carro" . $carro1->status . "<br> <br>";

        echo "Fabricante do Carro: " . $carro1->fabricante . "<br />
                Modelo: " . $carro1->modelo  ."<br>
                Na Cor: " . $carro1->cor . "<br />
                Ano: " . $carro1->ano . "<br /> <hr>";

         //Valores dos objetos
         echo "Carro" . $carro2->status . "<br> <br>";

         echo "Fabricante do Carro: " . $carro2->fabricante . "<br />
                 Modelo: " . $carro2->modelo  ."<br>
                 Na Cor: " . $carro2->cor . "<br />
                 Ano: " . $carro2->ano . "<br /> <hr>";

         //Valores dos objetos
         echo "Carro" . $carro3->status . "<br> <br>";

         echo "Fabricante do Carro: " . $carro3->fabricante . "<br />
                 Modelo: " . $carro3->modelo  ."<br>
                 Na Cor: " . $carro3->cor . "<br />
                 Ano: " . $carro3->ano . "<br /> <hr>";

         //Valores dos objetos
         echo "Carro" . $carro4->status . "<br> <br>";

         echo "Fabricante do Carro: " . $carro4->fabricante . "<br />
                 Modelo: " . $carro4->modelo  ."<br>
                 Na Cor: " . $carro4->cor . "<br />
                 Ano: " . $carro4->ano . "<br /> <hr>";

         //Valores dos objetos
         echo "Carro" . $carro5->status . "<br> <br>";

         echo "Fabricante do Carro: " . $carro5->fabricante . "<br />
                 Modelo: " . $carro5->modelo  ."<br>
                 Na Cor: " . $carro5->cor . "<br />
                 Ano: " . $carro5->ano . "<br /> <hr>";


    ?>
</body>
</html>