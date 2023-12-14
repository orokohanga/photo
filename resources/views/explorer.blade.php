@extends("template")
            
@section("content")


<div class="contentwrap">
    @foreach($photos as $photo)
    <div>
        <img src="{{ $photo->url }}" alt="Photo">
        <h2 class="phototitre">{{ $photo->titre }}</h2>
        <p> Tags : </p>
        @foreach($photo->tags as $tag)
            <a href="/explorer/tags/{{$tag->id}}">{{$tag->nom}}</a>
        @endforeach
    </div>
    @endforeach
</div>


@endsection