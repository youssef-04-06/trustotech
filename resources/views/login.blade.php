<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>

<h2>Admin Access</h2>

@if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

<form method="POST" action="/admin">
    @csrf
    <input type="password" name="password" placeholder="Enter Admin Password" required>
    <button type="submit">Enter</button>
</form>

</body>
</html>