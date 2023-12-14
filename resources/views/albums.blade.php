@extends("template")
            
@section("content")
    <h1> Liste des albums</h1>
    @foreach($albums as $album)
    <div class="album">
        <a href="/albums/{{$album->id}}">{{$album->titre}}</a>
        <p>Publié le : {{$album->creation}}</p>
        @if($album->photos->isNotEmpty())
        <img src="{{$album->photos->first()->url}}"> <!-- Assurez-vous d'ajuster le nom de la colonne URL en fonction de votre modèle Photo -->
        @endif
    <div>
    @endforeach
@endsection