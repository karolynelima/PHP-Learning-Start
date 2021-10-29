<?php   
    /*
    DECLARAÇÃO DE VARIÁVEL '$'
    PADRAO: Ñ PODE CONTER ESPAÇO, CARACTERES ESPESSIAIS OU NÚMEROS
    */
        $nome           = "Bonieky";    //STRING
        $sobrenome      = 'Lacerda';
        $totalDaSoma    = 10;           //INTEIRO
        $domingo        = true;         //BOOLEAN
        $vazia          = null;         //VAZIA
        $numero         = '3';          //PHP ENTENDE Q É UM NUMERAL


    /* 
    COMANDO PARA RETORNAR PARA A TELA  
    */
        echo $nome.' ', $totalDaSoma.' ', $domingo."<br/>";
   

    /*
     CONCATENAÇÃO
    */

        $nomeCompleto = $nome.$sobrenome.       "<br/>";    //SEM ESPAÇAMENTO
        $nomeCompleto = $nome.' '.$sobrenome.   "<br/>";    //COM ESPAÇAMENTO
        $nomeCompleto = "$nome $sobrenome".     "<br/>";    //COM ESPAÇAMENTO
        $nomeCompleto = $nome.                  "<br/>";
        $nomeCompleto .= $sobrenome.            "<br/>";    //ADICIONA O VALOR CRIADO COM O VALOR JÁ EXISTENTE

        echo $nomeCompleto;    

    /*
    ARRAY
    */

        $ingredientes = [   
            'açucar', 
            'fariha de trigo', 
            'ovo', 
            'leite', 
            'fermento em pó'
        ];

        echo $ingredientes[2].'<br/>';


    //EXERCICIO 1
            
        $lista = [
            'nome'      => 'Bonieky',
            'idade'     => 90,
            'atributes' => [
                'força'     => 60,
                'agilidade' => 80,
                'destreza'  => 50
            ],
            'vida' => 1000,
            'mana' =>  928
        ];
        echo "NOME:     ".$lista['nome']."<br/>";
        echo "FORÇA:    ".$lista['atributes']['força']."<br/>";
        echo "VIDA:     ".$lista['vida'].'<br/>'.'<br/>';
        

    /* 
    CONDICIONAL IF 
    */
        $idade = 40;

        if($idade >= 18){
            echo 'Maior de idade';
        }else{
            echo 'Menor de idade';
        }













































?>