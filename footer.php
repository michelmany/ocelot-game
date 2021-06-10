    <footer class="ocelot-footer text-center">
        <div class="container">
            <img src="@asset('images/ocelot-logo-footer.svg')" alt="Ocelot Logo" class="ocelot-footer__logo">

            <nav class="ocelot-footer__menu">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled d-md-flex justify-content-md-center']) !!}
            @endif
            </nav>

            <p class="ocelot-footer__copy">© All Rights Reserved Ocelot 2021 <br> Site Design & Branding by Fully Illustrated Ltd <br> Developed by Michel Moraes</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>