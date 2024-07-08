<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome</h1>

    @foreach ($user as $item)
       {{$item}}
       @if ($item == 'noyon')
       <h1>User Active {{$item}} </h1>
       @elseif($item == 'alim')
       <h1>User Active {{$item}}</h1>
       @else
       <h1>User UnActive {{$item}}</h1>
       @endif
   @endforeach

   {{-- @if ($user== 'noyon')
       <h1>User Active {{$user}}</h1>
   @else
   <h1>User Unactive {{$user}}</h1>
   @endif --}}
</body>
</html>