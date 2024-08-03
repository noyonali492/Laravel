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
  


    //__construct
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
  


// Abstract 
//  Abstract class parentClass{
//     public $name;

//     Abstract protected function calc($a,$b);
//   }

//   class childClass extends parentClass{

//     public function calc($a,$b){
//        // echo $a + $b;
//        echo " noyon";
//     }
//   }
//   $test = new childClass();
//   $test->calc(10,50);



// Interfaces 

// interface parent1{
//      function calc($a,$b);
// }

// interface parent2{
//     function sub($c,$d);
// }

// class childClass implements parent1,parent2{
// public function calc($a,$b){
//         echo $a+$b. "<br>";
// }

// public function sub($c,$d){
//         echo $c - $d;
// }
// }

// $test = new childClass();
// $test->calc(10,10);
// $test->sub(10,5);


// static

// class base{
//     public static $name="noyon";
//     public static function show(){
//          echo  self::$name;
//     }
// }
// echo base::show();



// Traits

// trait hello{
//     public function sayhi(){
//         return "hi everyone";
//     }
// }

// trait bye{
//     public function saybye(){
//         return "Bye Bye everyone";
//     }
// }

// class welcome{
//     use hello;
// }
// $wel = new welcome();
// echo $wel->sayhi(). "<br>"."<br>";

// class welcome1{
//     use hello, bye;
// }

// $wel1 = new welcome1();
// echo $wel1->sayhi(). "<br>";
// echo $wel1->saybye();

@endphp