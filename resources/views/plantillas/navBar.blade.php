<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub&display=swap" rel="stylesheet">

    <link rel="icon" href="{{asset('img/logoSeter-icon.png')}}">
    <title>Seter</title>
    <link rel="stylesheet" href="{{ asset('css/style-index.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <script src="https://kit.fontawesome.com/8e785e1f4e.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <header>
        <div class="header-wrapper">
            <div class="search-input-container">
                <input type="text" name="text" class="input" placeholder="Buscar producto...">
                <span class="icon"> 
                  <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </span>
              </div>
    
            <div class="logo-header">
                
                <a href="{{route('index')}}">  
                    <img src="{{ asset('img/LogoSeterBlanco.png') }}" alt="Logo de SETER">              
                </a>
                
            </div>
    
            <section class="user-section">
                <a class="shopping-cart" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler-shopping-cart" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17h-11v-14h-2" />
                        <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                </a>
                
                <a class="account" href="{{route('login')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler-user" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                </a>
            </section>
        </div>
    </header>

    <!-- Barra de navegación -->
    <nav class="navbar">
        <a href="{{route('products')}}">Productos</a>
        <a href="{{route('brands')}}">Marcas</a>
    </nav>

    <div class="red">
        <div id="facebook">
          <a href="https://www.facebook.com/profile.php?id=100083577450407&ref=pages_you_manage" target="none" class="fa-brands fa-facebook"></a>
        </div>
    </div>