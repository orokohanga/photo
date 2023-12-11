@extends("template")

            
@section("content")

<form method="POST" action="/albums/create">
    @csrf

    <label for="name">Titre</label>
    <input type="text" name="titre" required>  <br> 

    <input type="file" name="image" multiple> <br>

    <input type="submit" value="Envoyer" />
</form>
@endsection