@extends("template")

            
@section("content")

<form method="POST" action="/photos/add" enctype="multipart/form-data">
    @csrf
    
    <label for="name">Titre</label>
    <input type="text" name="titre" required>  <br> 
    <input type="file" name="url" required> <br>
    <input type="hidden" name="album_id" value="{{ $album->id }}">
    <input type="submit" value="Envoyer" />
</form>
@endsection