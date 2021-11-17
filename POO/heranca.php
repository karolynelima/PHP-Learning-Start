<?php
/*
CLASSE PAI: MÉTODOS PRIVATE SÓ PODEM SER ALTERADOS DENTRO DA CLASSE PAI, 
            ENQUANTO MÉTODOS PROTECTED POSEM SER ALTERADOS ATRAVÉS DA CLASSE FILHA;
*/
class Post{
    private $id;
    //protected $id;
    private $likes = 0;

    protected function setId($aux){
        $this->id = $aux;
    }
    public function getId(){
        return $this->id;
    }
    protected function setLikes($aux2){
        $this->likes = $aux2;
    }
    public function getLikes(){
        return $this->likes;
    }

}
/*
CLASSE FILHA: FOTO HERDA OS MÉTODOS DA CLASSE POST UTILIZANDO A SINTAXE 'EXTENDS'
              É POSSÍVEL RECRIAR MÉTODOS PROTECTED NA CLASSE FILHA
*/
class Foto extends Post{
    private $url;

    public function __construct($id){
        //$this->id = 900;
        $this->setId($id);        
        $this->setLikes(77);
    }
    public function getUrl(){
        return $this->url;
    }
    public function setUrl($u){
        $this->url = $u;
    }
}

$foto = new Foto(20);
$foto->setUrl('abc');
//$foto->id = 700;

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();


?>