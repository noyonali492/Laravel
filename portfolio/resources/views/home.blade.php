<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome</h1>

   {{$user}}

   @if ($user== 'noyon')
       <h1>User Active {{$user}}</h1>
   @else
   <h1>User Unactive {{$user}}</h1>
   @endif
</body>
</html>