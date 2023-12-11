@extends("template")
            
@section("content")

    @foreach($photos as $photo)
        <img src="{{ $photo->url }}" alt="Photo">
        <p>{{ $photo->titre }}</p>
            <p>
            @foreach($photo->tags as $tag)
            <a href="/explorer/tags/{{$tag->id}}">{{$tag->nom}}</a>
            @endforeach
            </p>
    @endforeach


@endsection