<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Movie</title>
</head>
<body>
    <div class="container">
        <h1>All Movies</h1>
        @foreach ($movies as $movie)
        <div class="card">
            {{-- TITOLO --}}
            <div class="title">
            <h2>{{$movie->title}}</h2>
        </div>
        {{-- TITOLO ORIGINALE --}}
        <div class="original-title">
            <h3><em>{{$movie->original_title}}</em></h3>
        </div>
        {{-- NAZIONALITA --}}
        <div class="nationality">
            <b>Nationality: </b><span>{{$movie->nationality}}</span>
        </div>
        {{-- DATA DI USCITA --}}
        <div class="date">
            <b>Release date: </b><span>{{$movie->date}}</span>
        </div>
        {{-- VOTO --}}
        <div class="vote">
            <b>Vote: </b><span>{{$movie->vote}}</span>
        </div>
        </div>
        @endforeach
    </div>




</body>
</html>
