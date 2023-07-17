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
    <link rel="shortcut icon" href="./assets/icon/favicon-sancamilo.ico" type="image/x-icon">

    <!-- HTML Meta Tags -->
    <title>Dona Salud ▷ Traperos de Emaús San Camilo: Brindando esperanza y oportunidades a quienes más lo necesitan</title>
    <meta name="description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Brindemos esperanza y oportunidades a quienes más lo necesitan.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://emaussancamilo.org">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Dona Salud ▷ Traperos de Emaús San Camilo: Brindando esperanza y oportunidades a quienes más lo necesitan">
    <meta property="og:description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Brindemos esperanza y oportunidades a quienes más lo necesitan.">
    <meta property="og:image" content="https://emaussancamilo.org/assets/img/logo.webp">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="emaussancamilo.org">
    <meta property="twitter:url" content="https://emaussancamilo.org">
    <meta name="twitter:title" content="Dona Salud ▷ raperos de Emaús San Camilo: Brindando esperanza y oportunidades a quienes más lo necesitan">
    <meta name="twitter:description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Brindemos esperanza y oportunidades a quienes más lo necesitan.">
    <meta name="twitter:image" content="https://emaussancamilo.org/assets/img/logo.webp">

</head>
<body class="body"><!--v1.0-->
    <!-- Agregando componente header -->
    <?php include('./components/header.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="banner banner__nosotros my-scroll f-elements f-elements--center my-scroll" id="banner">
            <div class="container">
                <div class="f-elements f-col f-elements--center">
                    <p class="banner__title">DONACIONES</p>
                </div>
            </div>
        </section>

        <!-- DONACIONES -->
        <section class="section" id="donaciones">
            <div class="container">
                <div class="f-elements f-col f-elements--center gap-md">
                    <p class="section__title section__title--primary">¿Qué puedes <span class="section__title--span">donar?</span></p>
                    <div class="slider f-elements f-col f-elements--center">
                        <div class="swiper mySwiperDonation">
                            <div class="f-elements f-elements--end gap-sm py-sm">
                                <div class="button-prev cursor-pointer"><img src="./assets/icon/button-prev.svg" alt="" /></div>
                                <div class="button-next cursor-pointer"><img src="./assets/icon/button-next.svg" alt="" /></div>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Ropa y Calzado</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/ropa-y-calzado.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Muebles y Estantes</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/muebles.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Computadoras y Laptops</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/computadoras.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Artefactos Tecnológicos</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/artefactos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Electrodomésticos y Artefactos</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/electrodomesticos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Bienes e Inmuebles</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/bienes-e-inmuebles.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Juguetes y Muñecas</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/juguetes.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Ortopédicos</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/ortopedicos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Alimentos, Bebidas y Agua</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/alimentos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Reciclaje General</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Metales y Chatarra</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Cosas Usadas no Averiadas</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Donación de Vehículos y Motos</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                        <div class="f-elements f-col f-elements--center">
                                            <h3 class="card__title card__title--secondary">Traperos de Emaús</h3>
                                        </div>
                                        <div class="card__icon f-elements f-elements--center">
                                            <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="f-elements f-col f-elements--center gap-sm py-md px-responsive bg-parallax">
                <div class="f-elements f-col gap-sm">
                    <p class="section__title section__title--reverse-primary">¡Sé parte del <span class="section__title--span">cambio!</span></p>
                    <p class="section__description section__description--secondary">
                        Con Traperos de Emaús San Camilo, tienes la oportunidad de ofrecer asistencia a aquellos que más lo necesitan mediante 
                        donaciones desde la comodidad de tu hogar o lugar de trabajo. Recolectamos de forma gratuita en toda Lima y Callao, 
                        asegurando el cumplimiento de todos los protocolos de bioseguridad.
                    </p>
                </div>
                <div class="f-elements f-col f-elements--center">
                    <a class="button button--primary" href="#contact"><i class="bi bi-balloon-heart"></i> Haz tu donación</a>
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
    
</body>
</html>