<h1>Object Orianted Programing</h1>
@php
    

    class calculatio{
        public $a,$b,$c;
        function sum(){
            $this->c=$this->a + $this->b;
            return $this->c;
        }
        function sub(){
            $this->c=$this->a - $this->b;
            return $this->c;
        }
    }


    $c1 = new calculatio();
    $c1->a = 20;
    $c1->b = 10;

    $c2 = new calculatio();
    $c2->a = 50;
    $c2->b = 35;

    $c1->sum();

    $c2->sub();
  
@endphp