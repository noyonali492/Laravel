<h1>Home Page</h1>
@php
   $frutis=['apple','mango','banana','anaros'] ;

   $footers= "Noyon@electrabd.com";
@endphp


@include('page.hader',[ 'name'=>$frutis])

@include('page.footer',['footer'=>$footers])