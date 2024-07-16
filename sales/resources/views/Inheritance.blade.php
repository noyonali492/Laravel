<h1>Inheritance </h1>


@php

    class employe{
        public $name;
        public $age;
        public $salary;
        public function __construct($name,$age,$salary){
            $this->name = $name;
            $this->age = $age;
            $this->salary =$salary;
        }

        public function info(){
            echo "Employe Informaion <br>";
            echo " Employe Name : ".$this->name. "<br>";
            echo " Employe age : ".$this->age. "<br>";
            echo " Employe Salary :".$this->salary;
        
        }
    }

    $el= new employe("noyon",27,25000);
    $el->info();

    
@endphp