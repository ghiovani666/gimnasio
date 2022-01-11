    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area header-default header-transparent header-style sticky-header">

        <div class="container">


            <div class="row row-gutter-0 align-items-center">

                <!-- Header Top -->
                <div class="header-top d-xl-none">
                    <div class="auto-container">
                        <div class="inner-container">
                            <div class="left-column">
                                <ul class="contact-info">
                                    <li><a href="#">INICIO |</a></li>
                                    <li><a href="#">QUIENES SOMOS |</a></li>
                                    <li><a href="#">LOCALIZACIÓN |</a></li>
                                    <li><a href="viewContacto">CONTACTO</a></li>
                                </ul>
                            </div>
                            <div class="right-column">
                                <ul class="social-icon">
                                    <li><a href="#">Email: Info@hellotraining.es</a></li>
                                    <li><a href="#">Telf: 638572210</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php  
                    $footer_ = DB::table('home_footer')->where('id_footer', '=',1)->get();
                ?>
                <div class="col-4 col-xs-3 col-sm-3 col-md-3 col-xl-3">
                    <div class="header-logo-area">
                        <a href="/">
                            <img class="logo-main" src="{{ $footer_[0]->url_image }}" alt="Logo" />
                            <img class="logo-light" src="{{ $footer_[0]->url_image }}" alt="Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-9 col-xl-9">
                    <div class="header-align">
                        <div class="header-navigation-area d-none d-xl-block">
                            <ul class="main-menu nav position-relative">
                                <li class="has-submenu"><a href="#">Servicios</a>
                                    <ul class="submenu-nav">
                                        <li><a href="viewServicioTenis">Tenis</a></li>
                                        <li><a href="viewServicioPadel">Padel</a></li>
                                        <li><a href="viewServicioFisio">Fisio</a></li>
                                        <li><a href="viewServicioFitness">Fitness</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Packs</a></li>
                                <li><a href="#">Equipo</a></li>
                                <li class="has-submenu"><a href="#">Novedades</a>
                                    <ul class="submenu-nav">
                                        <li><a href="#">Eventos</a></li>
                                        <li><a href="#">Bonos</a></li>
                                        <li><a href="#">Noticias</a></li>
                                        <li><a href="#">Retos</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="#">Tienda</a></li>
                                <li><a href="viewContacto">Contacto</a></li>
                            </ul>
                        </div>

                        <div class="header-action-area">
                            <div class="header-action-cart d-none d-xl-block">

                                <?php if (Auth::check()) { ?>
                                <a href="/logout" class="supramenu__link"><i class="fa fa-power-off"></i>Logout</a>
                                <?php } else { ?>
                                <button class="btn-cart cart-icon" onclick="window.location.href='/admin/homes'">
                                    <span class="cart-count">?</span>
                                    <i class="pe-7s-users"></i>
                                </button>

                                <?php } ?>

                            </div>
                            <button class="btn-menu d-xl-none">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->