<!DOCTYPE html>
<html>
<head>
    <title>Movies Search Results</title>
</head>
<body>
    <h1>Movie Search Results</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }}</li>
        @endforeach
    </ul>
</body>
</html>
