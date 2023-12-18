<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Titre de la page</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>
	<body>
	<header>Ma super application</header>

	<nav>
	    <a href="/albums">Liste des albums</a>
        <form action='/explorer' method="GET">
            <input type="text" name="search">
            <button type="submit">chercher</button>
        </form>
		@auth
        <a href="/profil">Mon profil</a>
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