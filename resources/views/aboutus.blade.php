@include('plantillas.navBar')

<main>
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">
    <section class="container" id="aboutus">
        <div class="company">
            <p>
                En industrial Seter S.A de C.V fabricamos accesorios para instrumentación industrial a proceso
                como: Sellos Quimicos, Termopozos, Sifones, Amortiguadores, Valvulas de Nivel, Adaptadores, Ferulas Clamp,
                Concexiones SMS, DIN, ACME y la comercialización de instrumentación industrial a proceso 
            </p>
            <img src="img/logoSeter.png">
        </div>

        <p id="slogan"> If you need it, we will get it! </p>

        <div class="about">
            <h2> Acerca de Industrial Seter S.A. de C.V. </h2>
            <p> Industrial SETER S.A. de C.V. Es una empresa mexicana fundada el 30 agosto de 2001 
                con el objetivo principal de manufacturar accesorios para instrumentación industrial a proceso 
                para temperatura y presión con la más alta calidad debido a la capacitación constante de nuestro personal 
                como son: TERMOPOZOS, SELLOS QUÍMICOS DE DIAFRAGMA, AMORTIGUADORES y SIFONES.</p>
        </div>

        <div class="about">
            <h2> Conoce nuestra historia </h2>
            <h3 id="mision">Misión</h3>
            <p>
                Proporcionamos soluciones de medición, seguridad de los procesos y equipos de nuestros clientes a través del diseño, fabricación de accesorios y comercialización de equipos para automatizar y controlar la instrumentación industrial.
            </p>
            
            <h3 id="vision">Visión</h3>
            <p>
                Liderar a nivel nacional la fabricación de accesorios para instrumentos de medición de equipos o procesos y preferidos en la comercialización de instrumentos de medición.
            </p>

            <h3 id="politicas">Politicas de calidad</h3>
            <p>
                Aplicamos las herramientas definidas en nuestro Sistema de Gestión de Calidad, comprometidos con la mejora continua de nuestros productos y servicios, asegurando el cumplimiento de la normatividad vigente y la satisfacción total de nuestros clientes y partes interesadas.
            </p>

            <h3 id="valores">Valores SETER</h3>
            <ul class="valores">
                <li> Honestidad: Actitud de cumplir escrupulosamente con nuestro deber y nuestra función sin engañar o defraudar. </li>
                <li> Confianza: Seguridad que uno tiene en si mismo en lo que decimos y lo que hacemos. </li>
                <li> Lealtad: Actitud de quien no engaña, traiciona o abandona a sus amigos, compañeros y superiores, o de quien se mantiene firme en sus ideales y convicciones. </li>
                <li> Seguridad: Dar garantía a las personas sobre la realización o el cumplimiento de sus funciones. </li>
                <li> Unidad: Potencializar el trabajo colectivo. </li>
                <li> Respeto: Buena actitud con las personas y las cosas con las que interactuamos. </li>
                <li> Igualdad: Condición de ser una persona igual que otra; calidad de igualdad. Ser incluyentes. </li>
                <li> Responsabilidad: Aceptar las consecuencias de todas las decisiones que tomamos, lo que realizamos y lo que nos corresponde. </li>
            </ul>
        </div>
    </section>
</main>
    @include('plantillas.footer')
</body>
</html>