L - Liskov Substitution Principle (Principio da substituição de Liskov)
"Sempre que uma classe cliente esperar uma instância de uma classe base X, 
uma instância de uma subclasse Y de X deve poder ser usada no seu lugar."
<?php
//CLASSE PRINCIPAL; 
class A{
    public function getNome(){
        return "Meu nome é A";
    }
}
//B É PARTE DE A; NÃO PODE SER ALTERADO O TIPO DO RETORNO;
class B extends A{
    public function getNome(){
        return "Meu nome é B";
    }
}

function imprimeNome(A $obj){
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo "<br/>".imprimeNome($objeto1)."<br/>";
echo imprimeNome($objeto2);

