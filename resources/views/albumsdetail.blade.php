@extends("template")
            
@section("content")
    <h1>{{$album->titre}}</h1>
    <h2>{{$album->user->name}}</h2>
    @foreach($album->photos as $photo)
        <div class="photo">
            <img src="{{ $photo->url }}" alt="Photo">
            <p>{{$photo->titre}}</p>
            <p>
            @foreach($photo->tags as $tag)
            <a href="/explorer/tags/{{$tag->id}}">{{$tag->nom}}</a>
            @endforeach
            </p>
        <div>
    @endforeach
@endsection