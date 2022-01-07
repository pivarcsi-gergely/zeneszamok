<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Singer</th>
        <th>Length (mp)</th>
    </tr>
    @foreach($songs as $song)
    <tr>
        <td>{{$song->title}}</td>
        <td>{{$song->singer}}</td>
        <td>{{$song->length}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
