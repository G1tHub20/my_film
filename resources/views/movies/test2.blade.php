<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>
    <h1>Movie Details</h1>

    <ul>
        <?php
        // dd($details)
        // dd($details['backdrop_path']);
        ?>
        <p>ID：{{ $details['id'] }}</p>
        <p>タイトル：{{ $details['title'] }}</p>
        <p>原題：{{ $details['original_title'] }}</p>
        <p>あらすじ：{{ $details['overview'] }}</p>
        <p>ジャンル：
            @foreach($details['genres'] as $genre)
                <p>　　　　　{{ $genre['id'] }} {{ $genre['name'] }}</p>
            @endforeach
        <p>公開年：{{ substr($details['release_date'],0,4) }}</p>
        <p>監督：{{ $details['credits']['crew'][0]['original_name'] }}</p>
        <p>製作国：{{ $details['production_countries'][0]['name'] }}</p>
        <p>画像：<img src="https://image.tmdb.org/t/p/w500{{ $details['backdrop_path'] }}"></p>
        <p>https://image.tmdb.org/t/p/w500{{ $details['backdrop_path'] }}</p>
    </ul>
</body>
</html>
