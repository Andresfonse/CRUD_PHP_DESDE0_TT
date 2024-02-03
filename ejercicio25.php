<?php  



class persona {

    public $name;  

    private $edad;

    private $miedos;

    public $lastname;  

    public function newname($realname){

        $this->name=($realname);

    }

    public function newlastname($reallastname){


        $this->lastname=($reallastname);


        
    }

   

    public function saluda() {
        echo "Hola user, tu nombre es " . $this->name;
    }

    public function mostraredad(){

        $this->edad=22;
        return $this->edad;
        
    }

    public function miedos(){

        $this->miedos="arañas";

        return $this->miedos;
    
    
    
    }


}


class trabajador extends persona {

    public $puesto;  


    public function mostrarcargo(){

        echo "Hola soy".$this->name."y trabajo como ".$this->puesto."<br/>";
    }



}


$objtrabajador= new trabajador();
$objtrabajador->newname("Joa Paolo ");
$objtrabajador->puesto="Quimico";

$objtrabajador->mostrarcargo();




$objtrabajador2= new trabajador();
$objtrabajador2->newname("Kevin ");
$objtrabajador2->puesto="Profesor";

$objtrabajador2->mostrarcargo();


?>