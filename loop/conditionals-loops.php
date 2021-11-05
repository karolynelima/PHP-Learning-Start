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
            'farinha de trigo', 
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
        $idade = 21;

        if($idade >= 18){
            echo 'Maior de idade'.'<br/>';
        }else{
            echo 'Menor de idade'.'<br/>';
        }


    /* 
    CONDICIONAL TERNÁRIO/ IF DE UMA LINHA
    */
        $menorDeIdade   = ($idade <  18)    ? true : false;
        $resultado      = ($idade >= 18)    ? 'Maior de idade'.'<br/>' : 'Menor de idade'.'<br/>'; 
        
        echo ($idade >= 18) ? 'Maior de idade'.'<br/>' : 'Menor de idade'.'<br/>';

        if($menorDeIdade){
            echo 'MENOR'.'<br/>';
        } else echo 'MAIOR'.'<br/>';


    /* 
    CONDICIONAL SWITCH
    */
        $tipo = 'texto';

        switch($tipo){
            case 'foto':
                echo 'exibindo FOTO'.'<br/>';
                break;
            case 'video':
                echo 'exibindo VIDEO'.'<br/>';
                break;
            case 'texto':
                echo 'exibindo TEXTO'.'<br/>';
                break;
        }



    /*
    LOOP WHILE
    */
        $numero = 1;

        while($numero <= 10){
            echo "N: ".$numero."<br/>";
            $numero += 1;
        }
        

    /*
    LOOP FOR
    */
        for($numero = 0; $numero < 10; $numero += 1){
            echo "N: ".$numero."<br/>";
        }

        //FOR PADRAO
        for($i = 0; $i < 10; $i++){
            //...
        }

    /*
    LOOP FOR EACH (utilizando o array ingredientes declarado mais acima).
    */
        //PRINTA OS INTENS DO ARRAY COM SEU ID CORRESPONDENTE
        print_r($ingredientes);
        //LISTA OS ITENS DO ARRAY
       
        foreach($ingredientes as $ingrediente){
            echo "Item: ".$ingrediente."<br/>";
        }
          
        //FORMA PARA TER ACESSO AOS IDs DOS ELEMENTOS DO ARRAY
        echo '<h2>Ingredientes</h2>';
        echo '<ul>';
        foreach($ingredientes as $valor){
            echo '<li>'.$valor.'</li>';
        }
        
        foreach($ingredientes as $chave => $ingrediente){
            echo "Item ".($chave + 1).": ".$ingrediente."<br/>";
        } 

?>