@extends("template")

            
@section("content")
<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="name">Nom:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Mot de passe:</label>
    <input type="password" name="password" required>

    <button type="submit">Inscription</button>
</form>
@endsection