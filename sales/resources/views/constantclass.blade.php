<h1>constants class</h1>

@php
    

// class Goodbye {
//     const LEAVING_MESSAGE = "Thank you for visiting noyonahmed.com";
//   }
  
//   echo Goodbye::LEAVING_MESSAGE;




  class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();

  @endphp