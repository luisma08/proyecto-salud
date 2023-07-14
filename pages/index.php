<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/css/style.css">
    <link rel="stylesheet" href="./styles/css/fe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- FONT FAMILY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="shortcut icon" href="./assets/icon/favicon.svg" type="image/svg+xml">

    <!-- HTML Meta Tags -->
    <title>Donaciones Lima ▷ Emaús Esperanza Viva: Brindando esperanza y oportunidades a quienes más lo necesitan</title>
    <meta name="description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Brindemos esperanza y oportunidades a quienes más lo necesitan.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://emausesperanzaviva.org">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Donaciones Lima ▷ Emaús Esperanza Viva: Brindando esperanza y oportunidades a quienes más lo necesitan">
    <meta property="og:description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Brindemos esperanza y oportunidades a quienes más lo necesitan.">
    <meta property="og:image" content="https://emausesperanzaviva.org/assets/img/logo.webp">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="emausesperanzaviva.org">
    <meta property="twitter:url" content="https://emausesperanzaviva.org">
    <meta name="twitter:title" content="Donaciones Lima ▷ Emaús Esperanza Viva: Brindando esperanza y oportunidades a quienes más lo necesitan">
    <meta name="twitter:description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Brindemos esperanza y oportunidades a quienes más lo necesitan.">
    <meta name="twitter:image" content="https://emausesperanzaviva.org/assets/img/logo.webp">

</head>
<body class="body"><!--v1.0-->
    <!-- Agregando componente header -->
    <?php include('./components/header.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="banner f-elements f-col f-elements--end my-scroll" id="banner">
            <div class="container f-elements f-elements--responsive gap-sm">
                <div class="banner__container">
                    <h1 class="banner__subtitle">Donaciones Lima.</h1>
                    <p class="banner__title">TU DONACIÓN LLENA DE ESPERANZA A LOS QUE MÁS NECESITAN</p>
                    <p class="banner__description">
                        Cambia una vida. Dona hoy
                    </p>
                    <div class="py-sm">
                        <a class="button button--primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación"><i class="bi bi-balloon-heart"></i> deseo donar</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- DONACIONES -->
        <section class="section">
            <div class="container">
                <div class="f-elements f-col f-elements--center gap-md">
                    <p class="section__title section__title--primary">¿Qué puedes donar?</p>
                    <div class="g-elements g-center gap-md g-template-columns">
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/cosas-usadas.svg" alt="donacion-de-cosas-usadas" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de cosas usadas</h2>
                            </div>
                        </div>
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/ropa.svg" alt="donacion-de-ropa" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de ropa</h2>
                            </div>
                        </div>
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/muebles.svg" alt="donacion-de-muebles" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de muebles</h2>
                            </div>
                        </div>
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/juguetes.svg" alt="donacion-de-jueguetes" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de juguetes</h2>
                            </div>
                        </div>
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/maquinas.svg" alt="donacion-de-maquinas" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de máquinas</h2>
                            </div>
                        </div>
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/salud.svg" alt="donacion-de-salud" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de salud</h2>
                            </div>
                        </div>
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-reciclaje" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de reciclaje</h2>
                            </div>
                        </div>
                        <div class="card card__hover f-elements md:f-col md:f-elements--center gap-sm bg-green p-responsive">
                            <div class="card__icon f-elements f-elements--center">
                                <img src="./assets/icon/atun.svg" alt="donacion-de-atun" class="icon">
                            </div>
                            <div class="f-elements f-col f-elements--center">
                                <h2 class="card__title card__title--primary">Donación de atún</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--   QUIENES SOMOS  -->

        <section class="section" id="nosotros">
            <div class="container">
                <div class="f-elements f-col md:f-row gap-md">
                    <div class="f-elements f-col gap-sm">
                        <p class="section__title section__title--secondary">¿Quiénes Somos?</p>
                        <p class="section__description section__description--primary">Somos una organización sin fines de lucro, conformada por un grupo de personas con gran vocación social que trabaja día a día con mucho amor, llevando esperanza a los pobladores de los sectores más vulnerables de Lima, Perú.</p>
                        <p class="section__description section__description--primary">Nos esforzamos en difundir nuestro trabajo para así recibir la mayor cantidad de ayuda posible y seguir llevando oportunidades de un futuro mejor para todos.</p>
                    </div>
                    <div class="f-elements f-col f-elements--center gap-md md:w-50">
                        <div class="swiper mySwiperNosotros">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="f-elements f-elements--center border">
                                        <img src="./assets/img/nosotros/nosotros-1.png" alt="" class="section__img" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="f-elements f-elements--center border">
                                        <img src="./assets/img/nosotros/nosotros-2.png" alt="" class="section__img" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="f-elements f-elements--center border">
                                        <img src="./assets/img/nosotros/nosotros-3.png" alt="" class="section__img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--  ACTIVIDADES 1 -->

        <section class="section" id="actividades">
            <div class="container">
                <div class="f-elements f-col bg-green border p-responsive--section gap-sm">
                    <h3 class="section__title section__title--third">Donación en Nueva Esperanza, Alto Retamal</h3>
                    <p class="section__text section__text--primary">Villa María del Triunfo, Lima</p>
                    <div class="f-elements f-col f-elements--center gap-md py-md">
                        <div class="swiper mySwiperActivity1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/nueva-esperanza-1.png" alt="donacion-nueva-esperanza-1" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/nueva-esperanza-2.png" alt="donacion-nueva-esperanza-2" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/nueva-esperanza-3.png" alt="donacion-nueva-esperanza-3" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/nueva-esperanza-4.png" alt="donacion-nueva-esperanza-4" class="card__img">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="swiper-pagination mt-auto"></div>
                            -->
                        </div>
                        <!--
                        <a class="button button--primary" href="./actividades-sociales.php"><i class="bi bi-balloon-heart"></i> Ver más</a>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <!--  ACTIVIDADES 2 -->

        <section class="section" id="">
            <div class="container">
                <div class="f-elements f-col bg-green border p-responsive--section gap-sm">
                    <h3 class="section__title section__title--third">Donación en Huancayo, Jauja</h3>
                    <p class="section__text section__text--primary">Junín</p>
                    <div class="f-elements f-col f-elements--center gap-md py-md">
                        <div class="swiper mySwiperActivity2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/huancayo-1.png" alt="donacion-huancayo-1" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/huancayo-2.png" alt="donacion-huancayo-2" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/huancayo-3.png" alt="donacion-huancayo-3" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/huancayo-4.png" alt="donacion-huancayo-4" class="card__img">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="swiper-pagination mt-auto"></div>
                            -->
                        </div>
                        <!--
                        <a class="button button--primary" href="./actividades-sociales.php"><i class="bi bi-balloon-heart"></i> Ver más</a>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <div class="m-negative show-content">
            <div class="container more f-elements f-col f-elements--end">
                <div class="f-elements f-col f-elements--end py-md">
                    <a href="" id="more" class="link">Mostras más</a>
                </div>
            </div>
        </div>

        <!--  ACTIVIDADES 3 -->

        <section class="section activity1 d-none" id="">
            <div class="container">
                <div class="f-elements f-col bg-green border p-responsive--section gap-sm">
                    <h3 class="section__title section__title--third">Donación en Comedor Popular María Parado de Bellido</h3>
                    <p class="section__text section__text--primary">San Juan de Miraflores, Lima</p>
                    <div class="f-elements f-col f-elements--center gap-md py-md">
                        <div class="swiper mySwiperActivity3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/sjm-1.png" alt="donacion-sjm-1" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/sjm-2.png" alt="donacion-sjm-2" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/sjm-3.png" alt="donacion-sjm-3" class="card__img">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="swiper-pagination mt-auto"></div>
                            -->
                        </div>
                        <!--
                        <a class="button button--primary" href="./actividades-sociales.php"><i class="bi bi-balloon-heart"></i> Ver más</a>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <!--  ACTIVIDADES 4 -->

        <section class="section activity2 d-none" id="">
            <div class="container">
                <div class="f-elements f-col bg-green border p-responsive--section gap-sm">
                    <h3 class="section__title section__title--third">Donación en Olla Común Atrapando Bendiciones</h3>
                    <p class="section__text section__text--primary">Villa María del Triunfo, Lima</p>
                    <div class="f-elements f-col f-elements--center gap-md py-md">
                        <div class="swiper mySwiperActivity4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/vmt-1.png" alt="donacion-vmt-1" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/vmt-2.png" alt="donacion-vmt-2" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/vmt-3.png" alt="donacion-vmt-3" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="./assets/img/donaciones/vmt-4.png" alt="donacion-vmt-4" class="card__img">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="swiper-pagination mt-auto"></div>
                            -->
                        </div>
                        <!--
                        <a class="button button--primary" href="./actividades-sociales.php"><i class="bi bi-balloon-heart"></i> Ver más</a>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-dark-green mt-xlg">
            <div class="container">
                <div class="g-elements g-elements--responsive g-elements--center gap-sm border-cta px-md py-md bg-parallax">
                    <div class="f-elements f-col">
                        <p class="section__title section__title--fourt">¡Cambiemos el mañana De muchas personas!</p>
                        <p class="section__text section__text--responsive">Con tu aporte ayudaremos a más familias.</p>
                    </div>
                    <div class="f-elements f-col f-elements--center mt-auto">
                        <a class="button button--outline-primary" href="https://wa.me/+51954746838?text=Hola Emaús Esperanza Viva, deseo realizar una donación"><i class="bi bi-balloon-heart"></i> deseo donar</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECCIONES CONSULTAS -->
        <section class="section" id="donar">
            <div class="container f-elements f-col gap-md">
              <h3 class="section__title section__title--primary">Donar es muy fácil!</h3>
              <P class="section__description section__description--secondary">Forma parte de nuestras acciones sociales. Recibimos cosas usadas, ropa, muebles, juguetes, máquinas, salud, reciclaje y víveres no perecibles.</P>
              <div class="g-elements g-elements--center gap-md g-template-columns">
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-1.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            1) Llámanos o escríbenos al WhatsApp 954 746 838 ó llena nuestro formulario de contacto.
                        </p>
                    </div>
                </div>
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-2.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            2) Te atenderemos y brindaremos toda la información que necesites.
                        </p>
                    </div>
                </div>
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-3.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            3) Programaremos el recojo hasta tu domicilio o centro de labores.
                        </p>
                    </div>
                </div>
                <div class="card f-elements f-col f-elements--center gap-sm px-sm py-sm">
                    <div class="card__img-icon f-elements f-elements--center">
                        <img src="./assets/icon/service-4.svg" alt="">
                    </div>
                    <div class="card__body-services f-elements f-col f-elements--center gap-sm px-md">
                        <p class="card__text">
                            4) Realizamos el recojo cumpliendo con todos los protocolos de bioseguridad.
                        </p>
                    </div>
                </div>
              </div>
            </div>
        </section>
        
        
        <!-- Agregando componente footer -->
        <?php include('./components/contact.php') ?>
        <!-- FIN -->

        <section class="section">
        </section>
    </main>

    <!-- Agregando componente footer -->
    <?php include('./components/footer.php') ?>
    <!-- FIN -->
    
    <script src="./js/header.js"></script>
    <script src="./js/swiper.js" type="module"></script>
    <script src="./js/showContent.js"></script>
    
</body>
</html>