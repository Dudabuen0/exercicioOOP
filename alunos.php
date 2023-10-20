<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Carros </title>
</head>
<body>
    <?php
        include("obj.php");

        //Instancia de um novo objeto
        $pessoa0 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa0->nome = "Ana Zinatto";
        $pessoa0->altura = "1.60";
        $pessoa0->nascimento = "03-Novembro-2006";
        $pessoa0->hobbie = "Treinar e Ouvir Música";
        $pessoa0->status = "  número 1";

        //Instancia de um novo objeto
        $pessoa1 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa1->nome = "Ana Clara Ferreira";
        $pessoa1->altura = "1.55";
        $pessoa1->nascimento = "21-Março-2007";
        $pessoa1->hobbie = "Pintar";
        $pessoa1->status = "  número 2";
        
        //Instancia de um novo objeto
        $pessoa2 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa2->nome = "Ana Clara Maciel";
        $pessoa2->altura = "1.50";
        $pessoa2->nascimento = "19-Janeiro-2007";
        $pessoa2->hobbie = "Ler e Ouvir Música";
        $pessoa2->status = "  número 3";

        //Instancia de um novo objeto
        $pessoa3 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa3->nome = "Beatriz Baccaro";
        $pessoa3->altura = "1.60";
        $pessoa3->nascimento = "02-Agosto-2006";
        $pessoa3->hobbie = "Esportes";
        $pessoa3->status = "  número 4";

        //Instancia de um novo objeto
        $pessoa4 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa4->nome = "Beatriz Mayumi";
        $pessoa4->altura = "1.65";
        $pessoa4->nascimento = "03/Março/2007";
        $pessoa4->hobbie = "Ler, Jogar Videogame e Ouvir Música";
        $pessoa4->status = " número 5";

        //Instancia de um novo objeto
        $pessoa5 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa5->nome = "Bruno Alvez";
        $pessoa5->altura = "1.78";
        $pessoa5->nascimento = "28-Maio-2007";
        $pessoa5->hobbie = "Treinar";
        $pessoa5->status = "  número 6";

        //Instancia de um novo objeto
        $pessoa6= new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa6->nome = "Camilly Vitória";
        $pessoa6->altura = "1.60";
        $pessoa6->nascimento = "21-Janeiro-2007";
        $pessoa6->hobbie = "Jazz e Ouvir Música";
        $pessoa6->status = " número 7";

        //Instancia de um novo objeto
        $pessoa7 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa7->nome = "Felipe Wilbert";
        $pessoa7->altura = "1.78";
        $pessoa7->nascimento = "14-Abril-2007";
        $pessoa7->hobbie = "Treinar";
        $pessoa7->status = " número 8";

        //Instancia de um novo objeto
        $pessoa8 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa8->nome = "Gabriel Alves";
        $pessoa8->altura = "1.84";
        $pessoa8->nascimento = "03-Agosto-2006";
        $pessoa8->hobbie = "Jogar Videogame e Esportes";
        $pessoa8->status = " número 9";

        //Instancia de um novo objeto
        $pessoa9 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa9->nome = "Gabriel Credendio";
        $pessoa9->altura = "1.70";
        $pessoa9->nascimento = "28-Julho-2006";
        $pessoa9->hobbie = "Videogame";
        $pessoa9->status = " número 10";

        //Instancia de um novo objeto
        $pessoa10 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa10->nome = "Gabriel Diaz";
        $pessoa10->altura = "1.74";
        $pessoa10->nascimento = "21-Março-2007";
        $pessoa10->hobbie = "Jogar";
        $pessoa10->status = " número 11";

        //Instancia de um novo objeto
        $pessoa11 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa11->nome = "Giovana Lupo";
        $pessoa11->altura = "1.62";
        $pessoa11->nascimento = "14-Maio-2007";
        $pessoa11->hobbie = "Pintar";
        $pessoa11->status = " número 13";

         //Instancia de um novo objeto
         $pessoa12 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa12->nome = "Guilherme Carvalho";
         $pessoa12->altura = "1.75";
         $pessoa12->nascimento = "09-Junho-2006";
         $pessoa12->hobbie = "Videogame";
         $pessoa12->status = " número 14";

          //Instancia de um novo objeto
        $pessoa13 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa13->nome = "Gustavo Otaviano";
        $pessoa13->altura = "1.85";
        $pessoa13->nascimento = "04-Março-2007";
        $pessoa13->hobbie = "Esportes";
        $pessoa13->status = " número 15";

         //Instancia de um novo objeto
         $pessoa14 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa14->nome = "Henrique Nagata";
         $pessoa14->altura = "1.58";
         $pessoa14->nascimento = "25-Outubro-2006";
         $pessoa14->hobbie = "Andar de Bicicleta";
         $pessoa14->status = " número 16";

          //Instancia de um novo objeto
        $pessoa15 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa15->nome = "Henrique Tavares";
        $pessoa15->altura = "1.63";
        $pessoa15->nascimento = "28-Julho-2006";
        $pessoa15->hobbie = "Jogar e Ouvir Música";
        $pessoa15->status = " número 17";

         //Instancia de um novo objeto
         $pessoa16 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa16->nome = "José Luiz";
         $pessoa16->altura = "1.71";
         $pessoa16->nascimento = "15-Setembro-2006";
         $pessoa16->hobbie = "Jogar";
         $pessoa16->status = " número 18";

          //Instancia de um novo objeto
        $pessoa17 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa17->nome = "Júlia Mogi";
        $pessoa17->altura = "1.70";
        $pessoa17->nascimento = "8-Novembro-2006";
        $pessoa17->hobbie = "Cozinhar";
        $pessoa17->status = " número 19";

         //Instancia de um novo objeto
         $pessoa18 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa18->nome = "Kauâ Lira";
         $pessoa18->altura = "1.63";
         $pessoa18->nascimento = "05-Janeiro-2007";
         $pessoa18->hobbie = "Tocar Guitarra";
         $pessoa18->status = " número 20";

          //Instancia de um novo objeto
        $pessoa19 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa19->nome = "Kauan Silva";
        $pessoa19->altura = "1.68";
        $pessoa19->nascimento = "02-Setembro-2006";
        $pessoa19->hobbie = "Jogar Videogame";
        $pessoa19->status = " número 21";

         //Instancia de um novo objeto
         $pessoa20 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa20->nome = "Laura Perez";
         $pessoa20->altura = "1.70";
         $pessoa20->nascimento = "02-Agosto-2006";
         $pessoa20->hobbie = "Ler";
         $pessoa20->status = " número 22";

          //Instancia de um novo objeto
        $pessoa21 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa21->nome = "Letícia Gabrielle";
        $pessoa21->altura = "1.65";
        $pessoa21->nascimento = "30-Setembro-2006";
        $pessoa21->hobbie = "Ouvir Música e Assistir Series";
        $pessoa21->status = " número 23";

         //Instancia de um novo objeto
         $pessoa22 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa22->nome = "Luis Gustavo";
         $pessoa22->altura = "1.77";
         $pessoa22->nascimento = "06-Março-2007";
         $pessoa22->hobbie = "Dormir e jogar Vidiogame";
         $pessoa22->status = " número 24";

          //Instancia de um novo objeto
        $pessoa23 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa23->nome = "Duda";
        $pessoa23->altura = "1.65";
        $pessoa23->nascimento = "02-Abril-2007";
        $pessoa23->hobbie = "Ver Serie e Jogar Vôlei";
        $pessoa23->status = " número 25";

         //Instancia de um novo objeto
         $pessoa24 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa24->nome = "Miguel Romero";
         $pessoa24->altura = "1.70";
         $pessoa24->nascimento = "14-Abril-2007";
         $pessoa24->hobbie = "Jogar Futebol";
         $pessoa24->status = " número 26";

          //Instancia de um novo objeto
        $pessoa25 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa25->nome = "Natally Reis";
        $pessoa25->altura = "1.60";
        $pessoa25->nascimento = "07-Janeiro-2007";
        $pessoa25->hobbie = "Ouvir Música";
        $pessoa25->status = " número 27";

         //Instancia de um novo objeto
         $pessoa26 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa26->nome = "Pedro Grechi";
         $pessoa26->altura = "1.69";
         $pessoa26->nascimento = "23-Março-2007";
         $pessoa26->hobbie = "Jogar e Desenhar";
         $pessoa26->status = " número 28";

          //Instancia de um novo objeto
        $pessoa27 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa27->nome = "Pedro Santos";
        $pessoa27->altura = "1.80";
        $pessoa27->nascimento = "24-Outubro-2006";
        $pessoa27->hobbie = "Tocar Violão";
        $pessoa27->status = " número 30";

         //Instancia de um novo objeto
         $pessoa28 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa28->nome = "Rai Franca";
         $pessoa28->altura = "1.82";
         $pessoa28->nascimento = "21-Março-2006";
         $pessoa28->hobbie = "Esporte, Ouvir Musicas e Jogos Eletronicos";
         $pessoa28->status = " número 31";

          //Instancia de um novo objeto
        $pessoa29 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa29->nome = "Ryan Silveira";
        $pessoa29->altura = "1.72";
        $pessoa29->nascimento = "02-Setembro-2006";
        $pessoa29->hobbie = "Videogame";
        $pessoa29->status = " número 32";

         //Instancia de um novo objeto
         $pessoa30 = new Aluno();  

         //Atribuindo valores aos atributos
         $pessoa30->nome = "Samuel Américo";
         $pessoa30->altura = "1.85";
         $pessoa30->nascimento = "26-Janeiro-2007";
         $pessoa30->hobbie = "Tocar Piano";
         $pessoa30->status = " número 33";

          //Instancia de um novo objeto
        $pessoa31 = new Aluno();  

        //Atribuindo valores aos atributos
        $pessoa31->nome = "Thell Zardi";
        $pessoa31->altura = "1.65";
        $pessoa31->nascimento = "31-Outubro-2006";
        $pessoa31->hobbie = "Jogar";
        $pessoa31->status = " número 34";

       
        //Valores dos objetos
        echo "Aluno" . $pessoa0->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa0->nome . "<br />
                Altura: " . $pessoa0->altura  ."<br>
                Nascimento: " . $pessoa0->nascimento . "<br />
                Hobbie: " . $pessoa0->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa1->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa1->nome . "<br />
                Altura: " . $pessoa1->altura  ."<br>
                Nascimento: " . $pessoa1->nascimento . "<br />
                Hobbie: " . $pessoa1->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa2->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa2->nome . "<br />
                Altura: " . $pessoa2->altura  ."<br>
                Nascimento: " . $pessoa2->nascimento . "<br />
                Hobbie: " . $pessoa2->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa3->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa3->nome . "<br />
                Altura: " . $pessoa3->altura  ."<br>
                Nascimento: " . $pessoa3->nascimento . "<br />
                Hobbie: " . $pessoa3->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa4->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa4->nome . "<br />
                Altura: " . $pessoa4->altura  ."<br>
                Nascimento: " . $pessoa4->nascimento . "<br />
                Hobbie: " . $pessoa4->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa5->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa5->nome . "<br />
                Altura: " . $pessoa5->altura  ."<br>
                Nascimento: " . $pessoa5->nascimento . "<br />
                Hobbie: " . $pessoa5->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa6->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa6->nome . "<br />
                Altura: " . $pessoa6->altura  ."<br>
                Nascimento: " . $pessoa6->nascimento . "<br />
                Hobbie: " . $pessoa6->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa7->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa7->nome . "<br />
                Altura: " . $pessoa7->altura  ."<br>
                Nascimento: " . $pessoa7->nascimento . "<br />
                Hobbie: " . $pessoa7->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa8->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa8->nome . "<br />
                Altura: " . $pessoa8->altura  ."<br>
                Nascimento: " . $pessoa8->nascimento . "<br />
                Hobbie: " . $pessoa8->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa9->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa9->nome . "<br />
                Altura: " . $pessoa9->altura  ."<br>
                Nascimento: " . $pessoa9->nascimento . "<br />
                Hobbie: " . $pessoa9->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa10->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa10->nome . "<br />
                Altura: " . $pessoa10->altura  ."<br>
                Nascimento: " . $pessoa10->nascimento . "<br />
                Hobbie: " . $pessoa10->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa11->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa11->nome . "<br />
                Altura: " . $pessoa11->altura  ."<br>
                Nascimento: " . $pessoa11->nascimento . "<br />
                Hobbie: " . $pessoa11->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa12->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa12->nome . "<br />
                Altura: " . $pessoa12->altura  ."<br>
                Nascimento: " . $pessoa12->nascimento . "<br />
                Hobbie: " . $pessoa12->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa13->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa13->nome . "<br />
                Altura: " . $pessoa13->altura  ."<br>
                Nascimento: " . $pessoa13->nascimento . "<br />
                Hobbie: " . $pessoa13->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa14->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa14->nome . "<br />
                Altura: " . $pessoa14->altura  ."<br>
                Nascimento: " . $pessoa14->nascimento . "<br />
                Hobbie: " . $pessoa14->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa15->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa15->nome . "<br />
                Altura: " . $pessoa15->altura  ."<br>
                Nascimento: " . $pessoa15->nascimento . "<br />
                Hobbie: " . $pessoa15->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa16->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa16->nome . "<br />
                Altura: " . $pessoa16->altura  ."<br>
                Nascimento: " . $pessoa16->nascimento . "<br />
                Hobbie: " . $pessoa16->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa17->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa17->nome . "<br />
                Altura: " . $pessoa17->altura  ."<br>
                Nascimento: " . $pessoa17->nascimento . "<br />
                Hobbie: " . $pessoa17->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa18->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa18->nome . "<br />
                Altura: " . $pessoa18->altura  ."<br>
                Nascimento: " . $pessoa18->nascimento . "<br />
                Hobbie: " . $pessoa18->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa19->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa19->nome . "<br />
                Altura: " . $pessoa19->altura  ."<br>
                Nascimento: " . $pessoa19->nascimento . "<br />
                Hobbie: " . $pessoa19->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa20->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa20->nome . "<br />
                Altura: " . $pessoa20->altura  ."<br>
                Nascimento: " . $pessoa20->nascimento . "<br />
                Hobbie: " . $pessoa20->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa21->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa21->nome . "<br />
                Altura: " . $pessoa21->altura  ."<br>
                Nascimento: " . $pessoa21->nascimento . "<br />
                Hobbie: " . $pessoa21->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa22->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa22->nome . "<br />
                Altura: " . $pessoa22->altura  ."<br>
                Nascimento: " . $pessoa22->nascimento . "<br />
                Hobbie: " . $pessoa22->hobbie . "<br /> <hr>";


                //Valores dos objetos
        echo "Aluno" . $pessoa23->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa23->nome . "<br />
                Altura: " . $pessoa23->altura  ."<br>
                Nascimento: " . $pessoa23->nascimento . "<br />
                Hobbie: " . $pessoa23->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa24->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa24->nome . "<br />
                Altura: " . $pessoa24->altura  ."<br>
                Nascimento: " . $pessoa24->nascimento . "<br />
                Hobbie: " . $pessoa24->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa25->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa25->nome . "<br />
                Altura: " . $pessoa25->altura  ."<br>
                Nascimento: " . $pessoa25->nascimento . "<br />
                Hobbie: " . $pessoa25->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa25->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa25->nome . "<br />
                Altura: " . $pessoa25->altura  ."<br>
                Nascimento: " . $pessoa25->nascimento . "<br />
                Hobbie: " . $pessoa25->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa26->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa26->nome . "<br />
                Altura: " . $pessoa26->altura  ."<br>
                Nascimento: " . $pessoa26->nascimento . "<br />
                Hobbie: " . $pessoa26->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa27->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa27->nome . "<br />
                Altura: " . $pessoa27->altura  ."<br>
                Nascimento: " . $pessoa27->nascimento . "<br />
                Hobbie: " . $pessoa27->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa28->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa28->nome . "<br />
                Altura: " . $pessoa28->altura  ."<br>
                Nascimento: " . $pessoa28->nascimento . "<br />
                Hobbie: " . $pessoa28->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa29->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa29->nome . "<br />
                Altura: " . $pessoa29->altura  ."<br>
                Nascimento: " . $pessoa29->nascimento . "<br />
                Hobbie: " . $pessoa29->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa30->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa30->nome . "<br />
                Altura: " . $pessoa30->altura  ."<br>
                Nascimento: " . $pessoa30->nascimento . "<br />
                Hobbie: " . $pessoa30->hobbie . "<br /> <hr>";

                //Valores dos objetos
        echo "Aluno" . $pessoa31->status. "<br> <br>";

        echo "Nome do Aluno: " . $pessoa31->nome . "<br />
                Altura: " . $pessoa31->altura  ."<br>
                Nascimento: " . $pessoa31->nascimento . "<br />
                Hobbie: " . $pessoa31->hobbie . "<br /> <hr>";

    ?>
</body>
</html>