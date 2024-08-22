document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('deleteProductBtn').addEventListener('click', function() {
        if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
            document.getElementById('deleteProductForm').submit();
        }
    });
});