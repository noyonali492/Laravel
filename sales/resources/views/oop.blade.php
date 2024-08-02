<h1>Object Orianted Programing</h1>
@php
    

    // class calculatio{
    //     public $a,$b,$c;
    //     function sum(){
    //         $this->c=$this->a + $this->b;
    //         return $this->c;
    //     }
    //     function sub(){
    //         $this->c=$this->a - $this->b;
    //         return $this->c;
    //     }
    // }


    // $c1 = new calculatio();
    // $c1->a = 20;
    // $c1->b = 10;

    // $c2 = new calculatio();
    // $c2->a = 50;
    // $c2->b = 35;

    // echo $c1->sum() ."<br>";
    
    // echo $c2->sub();
  
//    class person{
//     public $name;
//     public $age;

//     public function __construct($name, $age){
//             $this->name = $name;
//             $this->age= $age;
//     }

//     public function show(){
//         return $this->name . " age" . $this->age;
//     }
//    }

//    $a1= new person('alim',20);
//    echo $a1->show();
  
//    Abstract 

 Abstract class parentClass{
    public $name;

    Abstract protected function calc($a,$b);
  }

  class childClass extends parentClass{

    public function calc($a,$b){
       // echo $a + $b;
       echo " noyon";
    }
  }

  $test = new childClass();
  $test->calc(10,50);
  
@endphp