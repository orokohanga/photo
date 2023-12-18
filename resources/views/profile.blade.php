@extends("template")
            
@section("content")
    @auth
    <h1>Mon Profile</h1>
    <h2>Mes albums</h2>
    @else
    <h1>caca</h1>
    @endauth
    <div class="contentwrap">
    @foreach($albums as $album)
    <div class="album">
        <a href="/albums/{{$album->id}}">{{$album->titre}}
        <p>Publié le : {{$album->creation}}</p>
        @if($album->photos->isNotEmpty())
        <img src="{{$album->photos->first()->url}}"> </a> <!-- Assurez-vous d'ajuster le nom de la colonne URL en fonction de votre modèle Photo -->
        @else
        <img src="/storage/upload/aucune-photo.jpg"> </a>
        @endif
    </div>
    @endforeach
</div>
@endsection