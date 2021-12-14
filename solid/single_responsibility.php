S - Single Responsibility Principle (Principio da responsabilidade única)
O - Open-closed Principle (Principio Aberto-Fechado)
L - Liskov Substitution Principle (Principio da substituição de Liskov)
I - Interface Segregation Principle (Principio da Segregação da Interface)
D - Dependency Inversion Principle (Principio da inversão de dependencia)
<?php

//NAO ATENDE AO SINGLE RESPONSIBILITY
class Usuario{
    public function setNome(){}
    public function getNome(){}

    public function add(){}
    public function update(){}
    public function delete(){}
}

//SEPARAÇÃO DE RESPONSABILIDADES POR CLASSE
class UsuarioSingle{
    public function setNome(){}
    public function getNome(){}
}

class UsuarioDb{
    
    public function add(){}
    public function update(){}
    public function delete(){}
}

