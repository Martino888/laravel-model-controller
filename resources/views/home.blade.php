<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

        @foreach ($movies as $movie)
           <div>{{$movie->title}}</div>
           <div>{{$movie->original_title}}</div>
           <div>{{$movie->nationality}}</div>
           <div>{{$movie->date}}</div>
           <div>{{$movie->vote}}</div>
        @endforeach



</body>
</html>
