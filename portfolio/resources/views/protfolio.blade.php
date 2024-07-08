<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome, {{ $user['name'] }}</h1>

    @if ($user['isAdmin'])
        <p>You are an admin!</p>
    @elseif($user['id']=1)
        <p>User Active</p>
    @else
        <p>You are a regular user.</p>
    @endif
</body>
</html>
