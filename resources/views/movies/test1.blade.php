<!DOCTYPE html>
<html>
<head>
    <title>Movies Search Results</title>
</head>
<body>
    <h1>Movie Search Results</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="/moviex/{{ $movie['id'] }}">
                    {{ $movie['id'] }}
                </a>
            </li>
            <li>{{ $movie['original_title'] }}</li>
            <li>{{ $movie['title'] }}</li>
            <li>{{ $movie['overview'] }}</li>
            <li>{{ $movie['release_date'] }}</li>
        @endforeach
    </ul>
</body>
</html>
