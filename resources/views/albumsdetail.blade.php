@extends("template")
            
@section("content")
    <h1>{{$album->titre}}</h1>
    <h2>{{$album->user->name}}</h2>
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
            </div>
    @endforeach
    </div>
@endsection