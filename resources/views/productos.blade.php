@include('plantillas.navBar')

<link rel="stylesheet" href="{{ asset('css/productCards.css') }}">

<!-- Add Product Button-->
    <div class="addButton">
        <button class="animated-button">
            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
            </svg>
            <span class="text"> <a href="{{route('addProduct')}}">Añadir producto</a></span>
            <span class="circle"></span>
            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
            </svg>
        </button>   
    </div>
    
    <main>
        <!-- sección de todos los productos-->
        <section class="wrapper">
            @foreach ($productos as $producto)
                <!-- Plantilla para producto -->
                <div class="card">
                    <!-- Imagen del producto -->
                    <img src="{{ asset('storage/' . $producto->imagen) }}" alt="Imagen del producto">


    
                    <div class="card-content">

                        <h2>{{ $producto->nombre }}</h2>
                        <p>{{ $producto->descripcion }}</p>
                        <a href="{{ route('productDetail', ['id' => $producto->id]) }}" class="button">Ver más</a>
                    </div>
                </div>
            @endforeach
        </section>

    </main>

    
<!--    <div class="pagination justify-content-center">
        {{ $productos->links() }}
    </div> 
-->


    

    @include('plantillas.footer')
    <script src="js/index.js"></script>
</body>
</html>