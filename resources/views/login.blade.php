<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROTOTIPO</title>
</head>
<body>
    <form action="{{route('validar')}}" method="post">
        @csrf
        <label for='elemento'>nick</label>
        <input type='text' name='usuario' id='elemento'><br>
        <label for='elemento'>Password</label>
        <input type='text' name='password' id='elemento'><br>
        <input type="submit" value="Validar">
    </form>
</body>
</html>
