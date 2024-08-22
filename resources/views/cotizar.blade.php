@include('plantillas.navBar')
<link rel="stylesheet" href="{{ asset('css/cotizar.css') }}">

    <main>
        <div class="cotizacionForm">
            <div class="heading">Cotizar productos</div>
            <form action="" class="form">

                <div class="datos">
                    <div class="etiquetas">
                        <label for="name"> Tu nombre completo* </label>
                    </div>

                    <div class="entrada">
                        <input class="input" type="text" name="name" id="name" required maxlength="30" minlength="3">
                    </div>
                </div>

                <div class="datos">
                    <div class="etiquetas">
                        <label for="name"> Pais </label>
                        <label for="name"> Estado </label>
                        <label for="name"> Ciudad </label>
                    </div>
                    <div class="entrada">
                        <select class="input-form" name="pais" id="pais" required>
                            <option value="" disabled selected style="display:none;">Seleccione un país*</option>
                            <option value="mexico"> México </option>
                            <option value="usa"> Estados Unidos </option>
                            <option value="canada"> Canadá </option>
                            <option value="alemania"> Alemania </option>
                            <option value="china"> China </option>
                            <option value="japon"> Japón </option>
                        </select>

                        <select class="input-form" name="estado" id="estado" required>
                            <option value="" disabled selected style="display:none;">Seleccione un estado*</option>
                            <option value="aguascalientes"> Aguascalientes </option>
                            <option value="baja california"> Baja California </option>
                            <option value="baja california sur"> Baja California Sur </option>
                            <option value="campeche"> Campeche </option>
                            <option value="chiapas"> Chiapas </option>
                            <option value="chihuahua"> Chihuahua </option>
                            <option value="coahuila"> Coahuila </option>
                            <option value="colima"> Colima </option>
                            <option value="cdmx"> Ciudad de México </option>
                            <option value="durango"> Durango </option>
                            <option value="guanajuato"> Guanajuato </option>
                            <option value="guerrero"> Guerrero </option>
                            <option value="hidalgo"> Hidalgo </option>
                            <option value="jalisco"> Jalisco </option>
                            <option value="mexico"> México </option>
                            <option value="michoacan"> Michoacán </option>
                            <option value="morelos"> Morelos </option>
                            <option value="nayarit"> Nayarit </option>
                            <option value="nuevo leon"> Nuevo León </option>
                            <option value="oaxaca"> Oaxaca </option>
                            <option value="puebla"> Puebla </option>
                            <option value="queretaro"> Querétaro </option>
                            <option value="quintana roo"> Quintana Roo </option>
                            <option value="san luis potosi"> San Luis Potosí </option>
                            <option value="sinaloa"> Sinaloa </option>
                            <option value="sonora"> Sonora </option>
                            <option value="tabasco"> Tabasco </option>
                            <option value="tamaulipas"> Tamaulipas </option>
                            <option value="tlaxcala"> Tlaxcala </option>
                            <option value="veracruz"> Veracruz </option>
                            <option value="yucatan"> Yucatán </option>
                            <option value="zacatecas"> Zacatecas </option>
                        </select>

                        <select class="input-form" name="ciudad" id="ciudad" required>
                            <!--Ciduades de mexico-->
                            <option value="" disabled selected style="display:none;">Seleccione una ciudad*</option>
                            <option value="mexico"> México </option>
                            <option value="guadalajara"> Guadalajara </option>
                            <option value="monterrey"> Monterrey </option>
                            <option value="puebla"> Puebla </option>
                            <option value="tijuana"> Tijuana </option>
                            <option value="leon"> León </option>
                            <option value="juarez"> Juárez </option>
                        </select>
                    </div>
                </div>

                <label for="empresa"> Empresa (Opcional) </label>
                <input class="input" type="text" name="empresa" id="empresa" maxlength="120"minlength="10">

                <label for="correo"> Correo* </label>
                <input class="input" type="text" name="correo" id="correo" required maxlength="80">

                <table>
                    <tr>
                        <td>Producto</td>
                        <td>Cantidad</td>
                    </tr>
                    <tr>
                        <td>Ejemplo</td>
                        <td>Ejemplo</td>
                    </tr>
                    <tr>
                        <td>Ejemplo2</td>
                        <td>Ejemplo2</td>
                    </tr>
                </table>

                <!--Fecha automatica-->
                <div class="fecha">
                    <label for="fecha"> Fecha de cotización: </label>
                    <script>
                        var f = new Date();
                        document.write(f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear());
                    </script>
                </div>
                
                <!--Boton de cancelar y enviar-->
                <div class="botones">
                    <input class="cancel-button" type="reset" value="Cancelar">
                    <input class="add-button" type="submit" value="Enviar">
                </div>
                
            </form>
    </main>

@include('plantillas.footer')
</body>
</html>