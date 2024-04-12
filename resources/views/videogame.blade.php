<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('meucss.css')}}">
    <title>Games</title>
</head>
<body>
    <h1>Lista de Jogos</h1>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Ano de Lançamento</th>
                <th>Estúdio</th>
                <th>Gênero</th>
                <th>Tipo de Gênero</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->release_year }}</td>
                    <td>{{ $game->studio }}</td>
                    <td>{{ $game->genre->name }}</td>
                    <td>{{ $game->genre->genre_type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
