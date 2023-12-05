@extends("template")
            
@section("content")

    @foreach($photos as $photo)
        <img src="{{ $photo->url }}" alt="Photo">
        <p>{{ $photo->titre }}</p>
        <p>{{ $photo->tags }}</p>
    @endforeach


@endsection