<?php
    echo "<h1>Welcome To My Sales Home Page</h1>"
?>

<h1>Home Page</h1>

<a href="{{route('post')}}">Post</a> </br>
<a href="about">About</a>

</br>
{{ "Noyon ali" }}
</br>

{!! "<h1>HTML Tag Modde Print </h1>" !!}


@php
    $name =['ALim','khalim','abul'];
@endphp
@foreach ($name as $item)
</br>
    {{ $item}}
@endforeach