<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>  
</head>

<style>
    *{
        padding: 0;
        margin: 0;
    }
    header{
        font-family: 'Poppins';
        width: 100%;
        color: white;
        background-color: #050018;
        font-size: 18px;
    }
    header h3{
        font-weight: 200;
        
    }
    .header{
        padding: 1rem;
        display: flex;
        width: 90%
        margin: auto;
        align-items: center;
        justify-content: space-around;
    }
    .search{
        width: 60%;
        border-radius: 5rem;
        background-color: white;
        display: flex;
        padding: .3rem;
        align-items: center;
    }
    .search:hover{
        background-color: rgb(235, 235, 235);
    }
    .search input{
        width: 90%;
        margin: auto;
        background: none;
        border: none;
        outline: none;
        font-family: 'Poppins';
        height: 100%;
    }
    .search i{
        color: rgb(153, 153, 153);
        rotate: 90deg;
        font-size: 22px;
        margin: auto;
    }
    .search a{
        height: 22px;
        width: 22px;
    }


    .main1{
        margin: auto;
        background-color: #0030DA;
        font-family: 'Poppins';
    }
    .AlbumJJ{
        padding-top: 3rem;
        margin: auto;
        width: 80%;
        background-color: green;
    }
    .albumJ{
        background-color: red;
        color: white;
    }

</style>


<body>
    <header>
        <div class="header">
        <h3>Accueil</h3>
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

    <main class="main1">
        <div class="AlbumJJ">
            <div class=albumJ>
                <h3>Albums du jour</h3>
                <div class="lscarte">
                    <div href="carte">
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>