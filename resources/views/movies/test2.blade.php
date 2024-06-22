<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>
    <h1>Movie Details</h1>

    <ul>
        {{-- {{ $details }} --}}
        <?php
        dd($details);
        // dd($details['production_companies']);
        // dd($details['id']); //映画ID
        // dd($details['original_title']); //タイトル
        // dd($details['release_date']); //公開年
        // dd($details['production_countries'][0]['name']); //製作国
        // dd($details['credits']['crew'][0]['original_name']); //監督

        ?>
        {{-- <li>{{ $details['title'] }}</li>
        <li>{{ $details['release_date'] }}</li>
        <li>{{ $details['director'] }}</li>
        <li>{{ $details['overview'] }}</li>
        <li>{{ $details['production_countries'] }}</li> --}}
    </ul>
</body>
</html>
