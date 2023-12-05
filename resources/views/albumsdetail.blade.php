@extends("template")
            
@section("content")
    <h1> Liste des albums</h1>
    @foreach($photos as $photo)
        <div class="photo">*
            <img src="{{ $photo->url }}" alt="Photo">
            <p>{{$photo->titre}}</p>
        <div>
    @endforeach
@endsection