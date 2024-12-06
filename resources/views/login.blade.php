<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('login.post')}}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter password">
        <input type="Submit">
    </form>
</body>
</html>