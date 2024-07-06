<h1>Home Page</h1>
@php
   $frutis=['apple','mango','banana','anaros'] 
@endphp


@include('page.hader',[ 'name'=>$frutis])

@include('page.footer')