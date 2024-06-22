<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>
    <h1>Movie Details</h1>

    <ul>
        <?php
        dd($details);
        // dd($details['credits']['crew'][0]['original_name']); //監督
        ?>
        {{-- {{ $details }} --}}
        <p>ID：{{ $details['id'] }}</p>
        <p>タイトル：{{ $details['original_title'] }}</p>
        <p>あらすじ：{{ $details['overview'] }}</p>
        <p>ジャンル：
            @foreach($details['genres'] as $genre)
                <p>　　　　　{{ $genre['id'] }} {{ $genre['name'] }}</p>
            @endforeach
        <p>公開年：{{ substr($details['release_date'],0,4) }}</p>
        <p>監督：{{ $details['credits']['crew'][0]['original_name'] }}</p>
        <p>製作国：{{ $details['production_countries'][0]['name'] }}</p>
    </ul>
</body>
</html>
