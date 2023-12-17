@extends("template")

            
@section("content")
<body>
<div class="login">
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h1></h1>
    <input type="email" placeholder="Email @" name="email" required>

    <input type="password" name="password" placeholder='Password' required>

    <div class=buttonss>
    <button type="submit">Connexion</button>
</div>
</form>
</div>
</body>
@endsection