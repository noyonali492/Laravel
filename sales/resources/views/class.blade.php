<h1>Class Practice</h1>

@php

// class Std { 
//    public $name="Shobuz";
//    public function Mathsubject(){
//     echo $this->name;

//    }
// }

//     $mathinfo= new Stdinfo();
//     $mathinfo->Mathsubject();
//     //echo "name". $mathinfo->name;




    // class techerinfo{ 

    // public $math_techer_name="Abdul Mannan";
    // private $camisty_ath_techer_name= "Rudro";
    //     public function teinfo(){
    //         echo $this->math_techer_name."<br>" ;
            
    //         echo $this->camisty_ath_techer_name;
    //     }
    
    // }

    // $altecherinfo = new techerinfo();
    // $altecherinfo->teinfo();


    // class stdname{
    //     public $name= "Noyon";
    //     private $techer_name= " alomgir";

    //     public function stdinfo(){
    //         $this->name;
    //        echo $this->techer_name;
    //     }
    // }

    // $stdnameinfo= new stdname();

    // $stdnameinfo->stdinfo();

    // echo $stdnameinfo->name;



// class Fruit {
//   public $name;
//   protected $color;
//   private $weight;
// }

// $mango = new Fruit();
// $mango->name = 'Mango'; // OK
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR




// class man{
//     public $name;
//     public $age;
//     public $address;

//     function info(){
//         return " Noyon Ahmmed";
//     }
// }
// $maninf = new man();

// echo $maninf->info();
// echo $maninf->name = "alim";



// class man{
//     public $name;
//     public $age;
//     public $address;

//     function info($name, $age,$address){
//         $this->name = $name;
//         $this->age = $age;
//         $this->address = $address;
//         return "Name : ".$this->name. "Age : " .$this->age.  " Adress : "  .$this->address;
        
//     }
// }
// $maninf = new man();
//  echo $maninf->info('noyon','26','dhaka');

//  $ninfo= new man();
//  echo "<br>". $ninfo->info('alim','25','dapuni');


class man{
    public $name;
    public $age;

    function  __construct($name,$age){
        $this->name =$name;
        $this->age = $age;
    }
    function info(){
        return $this->name. "  is ". $this->age;
    }
}

$maninfo = new man('noyon','24');
echo $maninfo->info();


@endphp