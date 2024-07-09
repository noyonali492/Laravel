{{-- php oparetor & oparend
      +-=        a,b,c --}}


 @php
    $a=8;
    $b=2;  
 @endphp

<h1>Arithmetic operators</h1> 
 A={{ $a }}<br>
 B={{ $b }}

<h4>Addition, For A+B, The Result is = {{$a+$b}}</h4>
<h4>Subtraction, For A-B, The Result is = {{$a-$b}}</h4>
<h4>Multiplication, For A*B, The Result is = {{$a*$b}}</h4>
<h4>Division, For A/B, The Result is = {{$a/$b}}</h4>
<h4>Modulus, For A%B, The Result is = {{$a%$b}}</h4>
<h4>Exponentiation, For A**B, The Result is = {{$a**$b}}</h4>