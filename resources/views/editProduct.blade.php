@include('plantillas.navBar')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

<main>
    
    <div class="productForm">
        <div class="heading">Editar producto</div>
        <form action="{{ route('products.update', ['product' => $producto->id]) }}" class="form" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Utiliza el método PUT para las actualizaciones -->

            <div class="datos">
                <div class="etiquetas">
                    <label for="name"> Nombre del producto* </label>
                    <label for="modelo"> Modelo* </label>
                </div>

                <div class="entrada">
                    <input class="input" type="text" name="name" id="name" required maxlength="300" minlength="3" value="{{ old('name', $producto->nombre) }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input class="input" type="text" name="modelo" id="modelo" required maxlength="100" value="{{ old('modelo', $producto->modelo) }}">
                    @error('modelo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="datos">
                <div class="etiquetas">
                    <label for="categoria"> Categoria* </label>
                    <label for="marca"> Marca* </label>
                </div>
            
                <div class="entrada">
                    <input class="input" type="text" name="categoria" id="categoria" required maxlength="80" value="{{ old('categoria', $producto->categoria) }}">
                    @error('categoria')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            
                    <select class="input-brand" name="marca" id="marca" required>
                        <!-- ... (opciones anteriores) ... -->
                        <option value="SETER" {{ old('marca', $producto->marca) == 'SETER' ? 'selected' : '' }}> SETER </option>
                        <!-- ... (repetir para otras marcas) ... -->
                    </select>
                    @error('marca')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <label for="descripcion"> Descripción </label>
            <input class="input" type="text" name="descripcion" id="descripcion" required maxlength="500" minlength="10" value="{{ old('descripcion', $producto->descripcion) }}">
            @error('descripcion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label for="caracteristicas"> Características </label>
            <input class="input" type="text" name="caracteristicas" id="caracteristicas" required maxlength="500" minlength="10" value="{{ old('caracteristicas', $producto->caracteristicas) }}">
            @error('caracteristicas')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="material"> Especificaciones de material </label>
            <input class="input" type="text" name="material" id="material" maxlength="200" value="{{ old('material', $producto->material) }}">
            @error('material')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="conexiones"> Especificaciones de conexiones </label>
            <input class="input" type="text" name="conexiones" id="conexiones" maxlength="200" value="{{ old('conexiones', $producto->conexiones) }}">
            @error('conexiones')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="rangos"> Especificaciones de rangos </label>
            <input class="input" type="text" name="rangos" id="rangos" maxlength="200" value="{{ old('rangos', $producto->rangos) }}">
            @error('rangos')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="temperatura"> Especificaciones de temperatura </label>
            <input class="input" type="text" name="temperatura" id="temperatura" maxlength="200" value="{{ old('temperatura', $producto->temperatura) }}">
            @error('temperatura')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="peso"> Especificaciones de peso </label>
            <input class="input" type="text" name="peso" id="peso" maxlength="100" value="{{ old('peso', $producto->peso) }}">
            @error('peso')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="normas"> Normas aplicables </label>
            <input class="input" type="text" name="normas" id="normas" maxlength="350" value="{{ old('normas', $producto->normasAplicables) }}">
            @error('normas')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="container-img">
                <label> Imagen del producto </label>
                <div class="header-img"> <img id="imagenMostrada" src="{{ isset($producto) ? asset('storage/' . $producto->imagen) : '' }}"> </div>
                <label for="file" class="footer-img"> 
                    <input type="file" id="inputImagen" name="inputImagen" onchange="mostrarImagen()"> 
                </label>
            </div>
            @error('inputImagen')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

                <input class="add-button" type="submit" value="Actualizar producto">

                <!-- Previsualizar la imagen, implementar en el otro input file -->
                <script src="{{ asset('js/image.js') }}"></script>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
</main>

    @include('plantillas.footer')
</body>
</html>