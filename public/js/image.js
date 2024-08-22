function mostrarImagen() {
    var input = document.getElementById('inputImagen');
    var imagenMostrada = document.getElementById('imagenMostrada');

    var archivo = input.files[0];
    if (archivo) {
        var lector = new FileReader();

        lector.onload = function (e) {
            imagenMostrada.src = e.target.result;
        };

        lector.readAsDataURL(archivo);
    }
}