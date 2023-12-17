@extends("template")
            
@section("content")
    <h1>{{$album->titre}}</h1>
    <h2>{{$album->user->name}}</h2> 
    @if($album->user_id == Auth::id())
            <form method="GET" action="{{ route('photos.addform', $album) }}">
                <button type="submit">Ajouter une photo à l'album</button>
            </form>
        @endif
    <div class="contentwrap">
    @foreach($album->photos as $photo)
            <div>
            <img src="{{ $photo->url }}" alt="Photo">
            <p>{{$photo->titre}}</p>
            <p>
            @foreach($photo->tags as $tag)
            <a href="/explorer/tags/{{$tag->id}}">{{$tag->nom}}</a>
            @endforeach
            </p>
            @if($photo->album->user_id == Auth::id())
            <form method="post" action="{{ route('photos.delete', $photo) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette photo?')">Supprimer</button>
            </form>
        @endif
            </div>
    @endforeach
    </div>
@endsection