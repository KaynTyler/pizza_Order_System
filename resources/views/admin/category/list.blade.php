<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hello This is Category page
    <h3>Role - {{ Auth::user()->role}}</h3>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <input type="submit" value="Logout">
    </form>
</body>
</html>
