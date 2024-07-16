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
            echo " <h1> Employe Informaion </h1><br>";
            echo " Employe Name : ".$this->name. "<br>";
            echo " Employe age : ".$this->age. "<br>";
            echo " Employe Salary :".$this->salary. "<br> <br> <br>";
        
        }
    }

    class manager extends employe{
        public $ta= 2500;
        public $mobile =1200;
        public $totalsalary;
        
        public function info(){
            $this->totalsalary = $this->ta + $this->mobile + $this->salary;

            echo " <h2> Manager Informaion </h2><br>";
            echo " Manager Name : ".$this->name. "<br>";
            echo " Manager age : ".$this->age. "<br>";
            echo " Manager Salary :".$this->totalsalary;
        
        }
    }

    $el= new employe("naim",27,25000);
    $el->info();

    $el1= new manager('Noyon',27,27000);
    $el1->info();

    
@endphp