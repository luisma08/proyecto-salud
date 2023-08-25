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
    <title>Dona Salud ▷ Traperos de Emaús San Camilo: Se parte del cambio y ayuda a quienes más lo necesitan</title>
    <meta name="description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Sé parte del cambio y ayuda a los más necesitados desde tu hogar o centro de labores. Podemos darle un segundo uso a todos los artículos que ya no uses, asi cuidamos el medio ambiente y ayudamos a quienes más lo necesitan.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://emaussancamilo.org">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Dona Salud ▷ Traperos de Emaús San Camilo: Se parte del cambio y ayuda a quienes más lo necesitan">
    <meta property="og:description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Sé parte del cambio y ayuda a los más necesitados desde tu hogar o centro de labores. Podemos darle un segundo uso a todos los artículos que ya no uses, asi cuidamos el medio ambiente y ayudamos a quienes más lo necesitan.">
    <meta property="og:image" content="https://emaussancamilo.org/assets/img/logo.webp">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="emaussancamilo.org">
    <meta property="twitter:url" content="https://emaussancamilo.org">
    <meta name="twitter:title" content="Dona Salud ▷ Traperos de Emaús San Camilo: Se parte del cambio y ayuda a quienes más lo necesitan">
    <meta name="twitter:description" content="Tú puedes marcar la diferencia en Lima, Perú. Dona hoy para ayudar a las personas que más lo necesitan. Únete a nuestra misión de transformar vidas a través de donaciones. Sé parte del cambio y ayuda a los más necesitados desde tu hogar o centro de labores. Podemos darle un segundo uso a todos los artículos que ya no uses, asi cuidamos el medio ambiente y ayudamos a quienes más lo necesitan.">
    <meta name="twitter:image" content="https://emaussancamilo.org/assets/img/logo.webp">

</head>
<body class="body"><!--v1.0-->
    <!-- Agregando componente header -->
    <?php include('./components/header.php') ?>
    <!-- FIN -->

    <main class="main">
        <section class="banner banner__home my-scroll" id="banner">
            <div class="container">
                <div class="banner__container">
                    <h1 class="banner__subtitle">Dona Salud.</h1>
                    <p class="banner__title">¡Transforma Vidas!</p>
                    <p class="banner__description">
                        Apoya nuestra terapia vanguardista y brinda esperanza</br> a quienes más lo necesitan.
                    </p>
                    <div class="py-sm">
                        <a class="button button--primary" href="#donaciones"><i class="bi bi-balloon-heart"></i> Ver Donación</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--   QUIENES SOMOS  -->

        <section class="py-xl" id="nosotros">
            <div class="g-elements g-elements--responsive gap-md">
                <div class="slider">
                    <div class="swiper mySwiperNosotros">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                    <img src="./assets/img/nosotros/nosotros-1.jpeg" alt="" class="section__img border-right" />
                            </div>
                            <div class="swiper-slide">
                                    <img src="./assets/img/nosotros/nosotros-2.jpeg" alt="" class="section__img border-right" />
                            </div>
                            <div class="swiper-slide">
                                    <img src="./assets/img/nosotros/nosotros-3.jpeg" alt="" class="section__img border-right" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container f-elements f-col f-elements--justify-center gap-sm my-auto">
                    <p class="section__title section__title--secondary">¿Quiénes <span class="section__title--span">Somos?</span></p>
                    <p class="section__description section__description--primary">Somos un apasionado grupo de individuos con una fuerte vocación social que trabaja incansablemente 
                        con un profundo amor por aquellos que menos tienen. Nuestra misión principal es difundir y promover nuestra labor, buscando donaciones tanto de personas como 
                        de empresas e instituciones privadas y públicas. De esta manera, podemos continuar brindando ayuda y apoyo a las familias peruanas que más lo necesitan.
                    </p>
                    <div class="py-sm">
                        <a class="button button--primary" href="/nosotros">Saber mas</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- DONACIONES -->
        <section class="section" id="donaciones">
            <div class="container">
                <div class="f-elements f-col f-elements--center gap-md">
                    <p class="section__title section__title--primary">¿Qué puedes <span class="section__title--span">donar?</span></p>
                    <p class="section__description section__description--reverse-secondary">
                        Puedes donar cualquier objeto, cosa o lo que desees. A continuación podrás visualizar 
                        una lista de tarjetas donde al dar click te pondrás en contacto con nosotros, 
                        Traperos de Emaús San Camilo, para poder realizar una donación.
                    </p>
                    <div class="slider f-elements f-col f-elements--center">
                        <div class="swiper mySwiperDonation">
                            <div class="f-elements f-elements--end gap-sm py-sm">
                                <div class="button-prev cursor-pointer"><img src="./assets/icon/button-prev.svg" alt="" /></div>
                                <div class="button-next cursor-pointer"><img src="./assets/icon/button-next.svg" alt="" /></div>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Ropa y Calzado</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/ropa-y-calzado.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Muebles y Estantes</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/muebles.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Computadoras y Laptops</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/computadoras.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Artefactos Tecnológicos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/artefactos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Electrodomésticos y Artefactos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/electrodomesticos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Bienes e Inmuebles</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/bienes-e-inmuebles.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Juguetes y Muñecas</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/juguetes.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Ortopédicos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/ortopedicos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Alimentos, Bebidas y Agua</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/alimentos.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Reciclaje General</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Metales y Chatarra</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Cosas Usadas no Averiadas</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Vehículos y Motos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación." class="section__link" target="_blank">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Traperos de Emaús</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-cosas-usadas" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-sm">
                        <a class="button button--primary" href="/donaciones">Conocer más</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="f-elements f-col f-elements--center gap-sm py-xl px-responsive bg-parallax">
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

        <!--  ACTIVIDADES -->

        <section class="section" id="actividades">
            <div class="container">
                <div class="f-elements f-col gap-sm">
                    <p class="section__subtitle section__subtitle--third text-uppercase">Conoce nuestras</p>
                    <p class="section__title section__title--primary">
                        <span class="section__title--span">Últimas Actividades <i class="bi bi-heart-fill"></i></span>
                    </p>
                    <div class="f-elements f-col f-elements--center gap-md py-md">
                        <div class="swiper mySwiperActivity1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/donacion-juguetes-6.jpg" alt="juguetes" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/donacion-juguetes-22.jpg" alt="zapatos" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/bastones-1.jpeg" alt="bastones" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/pañales-3.jpeg" alt="pañales" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/muletas-1.jpeg" alt="muletas" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/andadores-1.jpeg" alt="andadores" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/silla-de-ruedas-1.jpeg" alt="silla-de-ruedas" class="card__img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card mx-auto">
                                        <img src="./assets/img/actividades/andadores-2.jpeg" alt="andadores" class="card__img">
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="swiper-pagination mt-auto"></div>
                            -->
                        </div>
                        <a class="button button--primary" href="/actividades-sociales"><i class="bi bi-balloon-heart"></i> Ver más Actividades</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--   TERAPIAS  -->

        <section class="section" id="nosotros">
            <div class="g-elements g-elements--responsive gap-md">
                <div class="slider">
                    <div class="swiper mySwiperTerapias">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                    <img src="./assets/img/terapias/terapia-1.jpeg" alt="" class="section__img border-right" />
                            </div>
                            <div class="swiper-slide">
                                    <img src="./assets/img/terapias/terapia-2.jpeg" alt="" class="section__img border-right" />
                            </div>
                            <div class="swiper-slide">
                                    <img src="./assets/img/terapias/terapia-3.jpeg" alt="" class="section__img border-right" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container f-elements f-col f-elements--justify-center gap-sm my-auto">
                    <p class="section__title section__title--secondary">Terapias especializadas para el <span class="section__title--span">bienestar</span></p>
                    <p class="section__description section__description--primary">
                        Mejoramos la calidad de vida de los adultos mayores mediante terapias especializadas, como la <b>podología</b>, alivio de <b>dolores lumbares</b>, tratamiento de <b>dolores articulares</b> y mucho más. Nuestro enfoque se centra en proporcionar cuidado personalizado y efectivo, adaptado a las necesidades individuales de cada cliente. 
                    </p>
                    <p class="section__description section__description--primary">
                        Con profesionales altamente capacitados y una atención dedicada, nos esforzamos por brindar un alivio tangible y duradero a nuestros pacientes. Permítanos ser su aliado en el camino hacia una vida más saludable y plena.
                    </p>
                    <div class="py-sm">
                        <a class="button button--primary" href="/terapias">Saber mas</a>
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
    
</body>
</html>