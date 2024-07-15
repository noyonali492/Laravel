<h1>Class Practice</h1>

@php

// class Stdinfo{ 
//    public $name="Shobuz";
//    public function Mathsubject(){
//     echo $this->name;

//    }
// }

//     $mathinfo= new Stdinfo();
//     $mathinfo->Mathsubject();
//     //echo "name". $mathinfo->name;




    class techerinfo{ 

    public $math_techer_name="Abdul Mannan";
    public $camisty_ath_techer_name= "Rudro";
        public function teinfo(){
            echo $this->math_techer_name."<br>" ;
            
            echo $this->camisty_ath_techer_name;
        }
    
    }

    $altecherinfo = new techerinfo();
    $altecherinfo->teinfo();

@endphp