{{-- php oparetor & oparend
      +-=        a,b,c --}}


 @php
    $a=8;
    $b=2;  
    $x=8;
    $y=10;
    $z=12;
 @endphp

A={{ $a }}<br>
B={{ $b }}


<h1>Arithmetic operators</h1> 

<h4>Addition, For A+B, The Result is = {{$a+$b}}</h4>
<h4>Subtraction, For A-B, The Result is = {{$a-$b}}</h4>
<h4>Multiplication, For A*B, The Result is = {{$a*$b}}</h4>
<h4>Division, For A/B, The Result is = {{$a/$b}}</h4>
<h4>Modulus, For A%B, The Result is = {{$a%$b}}</h4>
<h4>Exponentiation, For A**B, The Result is = {{$a**$b}}</h4>


<h1>PHP Assignment Operators</h1>
x = y	x = y	The left operand gets set to the value of the expression on the right	<br>
x += y	x = x + y	Addition	<br>
x -= y	x = x - y	Subtraction	<br>
x *= y	x = x * y	Multiplication	<br>
x /= y	x = x / y	Division	<br>
x %= y	x = x % y	Modulus<br>

<h4>{{ $a }}</h4>

x += y {{ $a += 100}} <br>
x -= y {{ $b -= 1}}<br>

x *= y {{$x *= 6}}<br>
x -= y {{$y /= 5}}<br>
x %= y {{$y %= 5}}