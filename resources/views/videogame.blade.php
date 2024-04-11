<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>
<body>
    <h1>Lista de Jogos</h1>
    <ul>
        @foreach($games as $game)
            <li>
                <strong>Título:</strong> {{ $game->title }} <br>
                <strong>Ano de Lançamento:</strong> {{ $game->release_year }} <br>
                <strong>Estúdio:</strong> {{ $game->studio }} <br>
                <strong>Gênero:</strong> {{ $game->genre->name }}
            </li>
            <br>
        @endforeach
    </ul>
</body>
</html>
