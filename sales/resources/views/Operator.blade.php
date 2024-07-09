{{-- php oparetor & oparend
      +-=        a,b,c --}}


 @php
    $a=8;
    $b=2;  
 @endphp

<h1>Arithmetic operators</h1> 
 A={{ $a }}<br>
 B={{ $b }}

<h4>For A+B, The Result is = {{$a+$b}}</h4>
<h4>For A-B, The Result is = {{$a-$b}}</h4>
<h4>For A*B, The Result is = {{$a*$b}}</h4>
<h4>For A/B, The Result is = {{$a/$b}}</h4>
<h4>For A%B, The Result is = {{$a%$b}}</h4>
<h4>For A**B, The Result is = {{$a**$b}}</h4>