<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('colors')}}">Colori</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h3>colori:</h3>
        <ul>
            @foreach ($colori as $colore)
            <li>{{$colore}}</li>
            @endforeach
        </ul>
    </main>
</body>
</html>
