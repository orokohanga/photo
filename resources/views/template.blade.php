<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8	<t	<title>Titre de la page</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>
	<body>
	<header>Ma super application</header>
er>
der>
	<nav>
	    <a href="/albums">Liste des albums</a>
        <a href="/explorer">explorer</a>
        <form action="/search">
            <input type="text">
            <button type="submit">Chercher</button>
        </form>
		@auth
        Bonjour {{Auth::user()->name}}
        <a href="/albums/create">Créer un album</a>
        <a href="{{route('logout')}}"
           onclick="document.getElementById('logout').submit(); return false;">Logout</a>
    @else
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endauth
    </nav>
    
    <main>
    @yield("content")
    </main>

	</body>
</html>