I - Interface Segregation Principle (Principio da Segregação da Interface)
"Apresenta apenas os métodos essenciais e que irão ser utilizados pela classe que 
o está implementando."

<?php
/*
INTERFACE QUE FERE O PRINCIPIO POR POSSUIR UMA FUNÇÃO QUE NAO SE APLICA A TODOS;
interface Aves{
    public function setLocation($lat, $lng);
    public function setAltitude($alt);
    public function render();
}
*/

//INTERFACE DE ACORDO COM O PRINCIPIO;
interface Aves{
    public function setLocation($lat, $lng);    
    public function render();
}

interface AvesQueVoam extends Aves{
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam{
    public function setLocation($lat, $lng){}
    public function setAltitude($alt){}
    public function render(){}
}

//NAO PRECISA UTILIZAR A ALTITUDE;
class Pinguim implements Aves{
    public function setLocation($lat, $lng){}
    public function render(){}
}

