@include('plantillas.navBar')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

<main style="margin-bottom: 5.4rem">
    <div class="productForm">
        <div class="heading">Iniciar sesión</div>
        <form action="{{ route('login')}}" class="form" method="post">
            @csrf

            <label for="email"> Correo electronico: </label>
            <input class="input" type="email" name="email" id="email" required>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="pwd"> Contraseña </label>
            <input class="input" type="password" name="pwd" id="pwd" required maxlength="25" minlength="8">
            @error('pwd')
                <a class="log-form" href="{{ route('signUp') }}">Registrarse</a>
            @enderror

            <input class="add-button" type="submit" value="Iniciar sesión">
            <a class="log-form" href="signup">Registrarse</a>
        </form>
</main>

    @include('plantillas.footer')
</body>
</html>