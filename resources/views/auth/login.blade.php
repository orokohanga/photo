@extends("template")

            
@section("content")
<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Mot de passe:</label>
    <input type="password" name="password" required>

    <button type="submit">Connexion</button>
</form>
@endsection