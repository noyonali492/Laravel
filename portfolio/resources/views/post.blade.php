<h1>Post page<h1>



    <h1>noyon</h1>

    {{$id}}
</br>
    {{$name}}

    @if ($id==1)
     <h1>Admin Active</h1>
     @elseif($name == 'noyon')
     <h3>Lowest Admin Active</h3>
    @else
    <h1 style="color: red">Admin Not Active</h1>
    @endif