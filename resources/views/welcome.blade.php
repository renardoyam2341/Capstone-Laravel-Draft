<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to the Portal</h1>
    <p>Please select your role to login:</p>
    <a href="{{ route('admin.login') }}" class="btn btn-primary">Login as Admin</a>
    <a href="{{ route('student.login') }}" class="btn btn-primary">Login as Student</a>
</body>
</html>
