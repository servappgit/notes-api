<!-- resources/views/notes.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Notes</title>
</head>
<body>
    <h1>Notes</h1>

    <ul>
        @foreach ($notes as $note)
            <li>{{ $note['text'] }}</li>
        @endforeach
    </ul>
</body>
</html>
