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
        <a href="/explorer">explorer</a>
		@auth
        Bonjour {{Auth::user()->name}}
        <a href="/albumscreate/">ajout film</a>
        <a href="#"
           onclick="document.getElementById('#').submit(); return false;">Logout</a>
        <form id="logout" action="#" method="post">
            @csrf
        </form>
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