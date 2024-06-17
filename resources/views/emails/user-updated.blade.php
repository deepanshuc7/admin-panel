<!DOCTYPE html>
<html>
<head>
    <title>Profile Updated</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>Your profile has been updated successfully. Here are your new details:</p>
    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        @if($user->is_admin)
            <li>Role: Admin</li>
        @else
            <li>Role: User</li>
        @endif
    </ul>
    <p>If you did not make these changes, please contact support immediately.</p>
</body>
</html>
