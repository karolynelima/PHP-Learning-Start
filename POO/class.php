<?php
/*
__CONSTRUCT():  MÉTODO QUE EXECUTA SEMPRE QUE SE É CRIADO UM OBJETO
                DEFINIR AS PROPRIEDADES INICIAIS DO OBJETO
*/
class Post{
    public  $id;
    public  $likes = 0;
    public  $comments = [];
    private $author;//SÓ PODE SER AUTERADA PELO SET PARA SER USADA COMO VERIFICAÇÃO
    
    public function __construct($postId){
        $this->id = $postId;
        // consultar banco de dados para pegar informações do POST $id
        $this->likes = 12 * $postId;
    }
    
    public function aumentarLike(){//VER FUNCIONAMENTO
        $this->$likes++; 
    }
    
    public function getAuthor(){
        return $this->author ?? 'Visitante';
    }
    public function setAuthor($n){
        if(strlen($n) >= 3){
            $this->author = ucfirst($n);//FORÇAR A PRIMEIRA LETRA DO NOME A SER MAIUSCULA;
        }
        
    }
    public function getLikes(){
        return $this->likes;
    }
    public function setLikes($likes){
        $this->likes = $likes;
    }

}

$post1 = new Post(1);
$post1->setAuthor('Karol');
$post1->setLikes(3);
//$post1->aumentarLike();

$post2 = new Post(2);
$post2->setAuthor('Lima');
$post2->setLikes(3);
//$post2->aumentarLike();

echo "POST 1:".$post1->getLikes()." likes/ ".$post1->getAuthor()."<br/>";
echo "POST 2:".$post2->getLikes()." likes/ ".$post2->getAuthor()."<br/>";

/*
O QUE NÃO FAZER PARA EVITAR ENCAPSULAMENTO
EX:
echo "POST 1:".$post1->$likes."likes -".$post1->author."<br/>";
echo "POST 2:".$post2->$likes."likes -".$post2->author."<br/>";
*/
?>