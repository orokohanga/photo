@extends("template")
            
@section("content")

    @foreach($photos as $photo)
        <img src="{{ $photo->url }}" alt="Photo">
    @endforeach


@endsection