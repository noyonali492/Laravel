<h1>Post page<php>



    <h1>noyon</h1>

    {{$id}}
</br>
    {{$name}}

    @if ($id==1)
     <h3>Admin Active</h3>
     @elseif($name == 'noyon')
     <h3>Lowest Admin Active</h3>
    @else
    <h1 style="color: red">Admin Not Active</h1>
    @endif

@php
    $a=5;
    $b=7;
    $sum=$a+$b; 
@endphp
    @if($sum>=8)
    <h4>Largest{{$sum}}</h4>
    @else
        <h3>Lowest</h3>
    @endif
    {{$sum}}

    