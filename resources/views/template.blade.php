<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}"/>
    <link>
	</head>
	<body>
        <header>
            <div class="header">
            <a href="/">Accueil</a>
            <div class="search">
                <a href="#">
                <i class='bx bx-search-alt-2'></i>
            </a>
                <input type="search" placeholder="Rechercher">
                <a>
                <i class='bx bx-eraser'></i>
                </a>
    
            </div>
            <h3>Profile</h3>
            </div>
        </header>
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
        <a href="#">Login</a>
        <a href="#">Register</a>
    @endauth
    </nav>
    
    <main>
    @yield("content")
    </main>
	</body>
</html>