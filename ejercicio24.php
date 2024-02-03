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


$objuser1= new persona();
$objuser1->newname("Juan");
$objuser1->newlastname("Perez");
$objuser2->mostraredad();



$objuser2= new persona();
$objuser2->newname("Jhon");
$objuser2->newlastname("Fonseca");
$objuser2->mostraredad();


echo $objuser1->name;

echo $objuser1->lastname;

echo $objuser2->lastname;

echo $objuser2->name;

echo $objuser2->mostraredad();

echo $objuser1->miedos();

$objuser1->saluda();

$objuser2->saluda();

?>