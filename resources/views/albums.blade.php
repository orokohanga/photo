@extends("template")
            
@section("content")
    <h1> Liste des albums</h1>
    @foreach($albums as $album)
    <div class="album">*
        <a href="/albums/{{$album->id}}">{{$album->titre}}</a>
        <p>Publié le : {{$album->creation}}</p>
    <div>
    @endforeach
@endsection