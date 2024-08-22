@include('plantillas.navBar')
<link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">
<link rel="stylesheet" href="{{ asset('css/productDetailbtn.css') }}">

    <main>
        <section class="productInf">
            <div class="headProduct">
                <img src="{{ asset('storage/' . $producto->imagen) }}" id="imagenMostrada" name="imagenMostrada" alt="Imagen no disponible">

                <section>
                    <div class="headProduct">
                        <!-- Botón de favorito -->
                        <h1 id="nombre" name="nombre">{{ $producto->nombre }}</h1>
                        <div class="btnProduct">
                            <div title="Like" class="heart-container">
                                <input id="Give-It-An-Id" class="checkbox" type="checkbox">
                                <div class="svg-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-outline" viewBox="0 0 24 24">
                                        <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-filled" viewBox="0 0 24 24">
                                        <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" class="svg-celebrate">
                                        <polygon points="10,10 20,20"></polygon>
                                        <polygon points="10,50 20,50"></polygon>
                                        <polygon points="20,80 30,70"></polygon>
                                        <polygon points="90,10 80,20"></polygon>
                                        <polygon points="90,50 80,50"></polygon>
                                        <polygon points="80,80 70,70"></polygon>
                                    </svg>
                                </div>
                            </div>

                            <!-- Botón para eliminar el producto -->
                            <script src="{{ asset('js/deleteConfirmation.js') }}"></script>
                            <button id="deleteProductBtn" class="delete-button">
                                <svg class="delete-svgIcon" viewBox="0 0 448 512">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                </svg>
                            </button>

                            <!-- Formulario para eliminar el producto -->
                            <form id="deleteProductForm" action="{{ route('deleteProduct', ['id' => $producto->id]) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            <!-- Botón para editar el producto -->
                            <a href="{{ route('products.edit', ['product' => $producto->id]) }}">
                                <button class="Btn">Edit 
                                    <svg class="svg" viewBox="0 0 512 512">
                                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                    </svg>
                                </button>
                            </a>

                            <!-- Botón para añadir al carrito el producto -->
                            <button class="cart">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg>
                                <span>Add to cart</span>
                            </button>

                        </div>
                        

                    </div>

                    <div class="headInf">
                        <h3 id="modelo" name="modelo">Modelo: {{ $producto->modelo }}</h3>
                        <h3 id="marca" name="marca">Marca: {{ $producto->marca }}</h3>
            
                        <h3>Descripción</h3>
                        <p id="descripcion" name="descripcion">{{ $producto->descripcion }}</p>
                    </div>
                </section>
            </div>      
        </section>

        <section class="productBody">
            <h2>Caracteristicas</h2>
            <p id="caracteristicas" name="caracteristicas">{{ $producto->caracteristicas }}</p>
    
            <h3>Especificaciones de materiales</h3>
            <p id="material" name="material">{{ $producto->material }}</p>
    
            <h3>Especificaciones de conexiones</h3>
            <p id="conexiones" name="conexiones">{{ $producto->conexiones }}</p>
    
            <h3>Especificaciones de rangos</h3>
            <p id="rangos" name="rangos">{{ $producto->rangos }}</p>
    
            <h3>Especificaciones de temperatura</h3>
            <p id="temperatura" name="temperatura">{{ $producto->temperatura }}</p>
    
            <h3>Especificaciones de peso</h3>
            <p id="peso" name="peso">{{ $producto->peso }}</p>
    
            <h3>Normas aplicables </h3>
            <p id="normasAplicables" name="normasAplicables">{{ $producto->normasAplicables }}</p>
        </section>
    </main>

    @include('plantillas.footer')
    <script src="js/index.js"></script>
</body>
</html>