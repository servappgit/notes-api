@foreach ($notes as $note)
    <div>
        <h3>{{ $note['text'] }}</h3>
    </div>
@endforeach
