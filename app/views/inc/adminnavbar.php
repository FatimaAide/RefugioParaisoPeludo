<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo APP_URL; ?>admindashboard/">
            <img src="<?php echo APP_URL; ?>app/views/img/paraiso.png" alt="Bulma" width="50" height="200">
        </a>
        <div class="navbar-burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">

        <div class="navbar-start">
            <a class="navbar-item" href="<?php echo APP_URL; ?>login/">
              Inicio          
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="<?php echo APP_URL; ?>admindasboard/">
                   admindashboard
                </a>
                <div class="navbar-dropdown is-boxed">

                    <a class="navbar-item" href="<?php echo APP_URL; ?>crudslider/">
                        CRUD Slider
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>crudmascotas/">
                        CRUD de mascotas
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>cruddonativo/">
                        CRUD de donativos
                    </a>

                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Usuario
                </a>
                <div class="navbar-dropdown is-boxed">

                    <a class="navbar-item" href="<?php echo APP_URL; ?>userAccount/">
                        Mi cuenta
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="<?php echo APP_URL; ?>logOut/" id="btn_exit" >
                        Salir
                    </a>

                </div>
            </div>
        </div>

    </div>
</nav>
