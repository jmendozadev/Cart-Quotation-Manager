<footer>
    <div class="footerSection">
        <section class="seter">
            <a href="{{route('index')}}">     
                <img src="{{ asset('img/LogoSeterBlanco.png') }}" alt="Logo SETER" width="100" height="70"> </a>
            
            <section>
                <h3>Industrial Seter S.A de C.V.</h3>
                <p>If you need it, we will get it</p>
            </section> 
        </section>

        <section class="contactUs">
            <h3>Medios de contacto:</h3>
            <ul>
                <li> <span class="fa-solid fa-phone"></span><a href="tel:+525516430033" target="none">+52 (55) 1643-0033</a></li>
            </ul>  
        </section>

        <section class="aboutus">
            <h3>About us:</h3>
            <ul>
                <li><a href="{{route('aboutus')}}">Misión y Visión</a></li>
                <li><a href="{{route('aboutus')}}">Politicas de calidad</a></li>
                <li><a href="{{route('aboutus')}}">Valores</a></li>
            </ul>
        </section>
    </div>
</footer>