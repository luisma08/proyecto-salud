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
    <title>Donaciones ▷ Traperos de Emaús San Camilo: Se parte del cambio y ayuda a quienes más lo necesitan</title>
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
        <section class="banner banner__donaciones my-scroll f-elements f-elements--center my-scroll" id="banner">
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
                                    <a href="#donacion-de-ropa-y-calzado" class="section__link donacion-1">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Ropa y Calzado</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/ropa-y-calzado.svg" alt="donacion-de-ropa-y-calzado" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-muebles-y-estantes" class="section__link donacion-2">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Muebles y Estantes</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/muebles.svg" alt="donacion-de-muebles-y-estantes" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-computadoras-y-laptops" class="section__link donacion-3">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Computadoras y Laptops</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/computadoras.svg" alt="donacion-de-computadoras-y-laptops" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-artefactos-tecnologicos" class="section__link donacion-4">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Artefactos Tecnológicos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/artefactos.svg" alt="donacion-de-artefactos-tecnologicos" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-electrodomesticos-y-artefactos" class="section__link donacion-5">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Electrodomésticos y Artefactos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/electrodomesticos.svg" alt="donacion-de-electrodomesticos" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-bienes-e-inmuebles" class="section__link donacion-6">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Bienes e Inmuebles</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/bienes-e-inmuebles.svg" alt="donacion-de-bienes-e-inmuebles" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-juguetes" class="section__link donacion-7">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Juguetes y Muñecas</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/juguetes.svg" alt="donacion-de-juguetes" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-ortopedicos" class="section__link donacion-8">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Ortopédicos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/ortopedicos.svg" alt="donacion-de-ortopedicos" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-alimentos" class="section__link donacion-9">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Alimentos, Bebidas y Agua</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/alimentos.svg" alt="donacion-de-alimentos" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-reciclaje" class="section__link donacion-10">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Reciclaje General</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-reciclaje-general" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-metales-y-chatarra" class="section__link donacion-11">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Metales y Chatarra</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-metales-y-chatarra" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-cosas-usadas" class="section__link donacion-12">
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
                                    <a href="#donacion-de-vehiculos" class="section__link donacion-13">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Donación de Vehículos y Motos</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-de-vehiculos-y-motos" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#donacion-de-traperos-de-emaus" class="section__link donacion-14">
                                        <div class="card card__slide f-elements f-col f-elements--center gap-sm bg-rev-rose p-responsive mx-auto">
                                            <div class="f-elements f-col f-elements--center">
                                                <h3 class="card__title card__title--secondary">Traperos de Emaús</h3>
                                            </div>
                                            <div class="card__icon f-elements f-elements--center">
                                                <img src="./assets/icon/reciclaje.svg" alt="donacion-por-distritos" class="icon">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTENIDO DONACIONES -->

        
        <section class="section donacion-content-1" id="donacion1">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Ropa y Calzado
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Abrigos</li>
                                <li class="section__list">Donación de Batas</li>
                                <li class="section__list">Donación de Blusas</li>
                                <li class="section__list">Donación de Calzado</li>
                                <li class="section__list">Donación de Camisas</li>
                                <li class="section__list">Donación de Casacas</li>
                                <li class="section__list">Donación de Chalecos</li>
                                <li class="section__list">Donación de Chompas</li>
                                <li class="section__list">Donación de Faldas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Frazadas</li>
                                <li class="section__list">Donación de Pantalones</li>
                                <li class="section__list">Donación de Pañales</li>
                                <li class="section__list">Donación de Polos</li>
                                <li class="section__list">Donación de Ropa</li>
                                <li class="section__list">Donación de Toallas</li>
                                <li class="section__list">Donación de Uniformes</li>
                                <li class="section__list">Donación de Zapatillas</li>
                                <li class="section__list">Donación de Zapatos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de ropa y calzado."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section donacion-content-2 d-none" id="donacion2">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Muebles
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Alfombras</li>
                                <li class="section__list">Donación de Camarotes</li>
                                <li class="section__list">Donación de Camas</li>
                                <li class="section__list">Donación de Colchones</li>
                                <li class="section__list">Donación de Cómodas</li>
                                <li class="section__list">Donación de Juegos de sala</li>
                                <li class="section__list">Donación de Juegos de Comedor</li>
                                <li class="section__list">Donación de Mesas</li>
                                <li class="section__list">Donación de Muebles</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Roperos</li>
                                <li class="section__list">Donación de Sillas</li>
                                <li class="section__list">Donación de Sillones</li>
                                <li class="section__list">Donación de Sofás</li>
                                <li class="section__list">Donación de Tarimas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de muebles."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-3 d-none" id="donacion3">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Computadoras
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Computadoras</li>
                                <li class="section__list">Donación de Equipos de Cómputo</li>
                                <li class="section__list">Donación de Impresoras</li>
                                <li class="section__list">Donación de Laptops</li>
                                <li class="section__list">Donación de Monitores</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Mouse</li>
                                <li class="section__list">Donación de Racks</li>
                                <li class="section__list">Donación de Servidores</li>
                                <li class="section__list">Donación de Switch</li>
                                <li class="section__list">Donación de Teclados</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de computadoras."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-4 d-none" id="donacion4">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Aparatos Tecnológicos
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Aparatos Tecnológicos</li>
                                <li class="section__list">Donación de Cámaras Fotográficas</li>
                                <li class="section__list">Donación de Celulares</li>
                                <li class="section__list">Donación de Equipos Electrónicos</li>
                                <li class="section__list">Donación de Filmadoras</li>
                                <li class="section__list">Donación de Grabadoras</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Reproductor Blu-ray</li>
                                <li class="section__list">Donación de Reproductor DVD</li>
                                <li class="section__list">Donación de Tablets</li>
                                <li class="section__list">Donación de Teléfonos</li>
                                <li class="section__list">Donación de Secadoras de Cabello</li>
                                <li class="section__list">Donación de Videojuegos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Aparatos Tecnológicos."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-5 d-none" id="donacion5">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Electrodomésticos
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Artefactos</li>
                                <li class="section__list">Donación de Cocinas</li>
                                <li class="section__list">Donación de Electrodomésticos</li>
                                <li class="section__list">Donación de Equipos de Sonido</li>
                                <li class="section__list">Donación de Lavadoras</li>
                                <li class="section__list">Donación de Licuadoras</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Microondas</li>
                                <li class="section__list">Donación de Refrigeradoras</li>
                                <li class="section__list">Donación de Reproductor Blu-Ray</li>
                                <li class="section__list">Donación de Reproductor de DVD</li>
                                <li class="section__list">Donación de Secadoras de Ropa</li>
                                <li class="section__list">Donación de Televisores</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Electrodomésticos."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-6 d-none" id="donacion6">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Bienes e Inmuebles
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Casas</li>
                                <li class="section__list">Donación de Departamentos</li>
                                <li class="section__list">Donación de Inmuebles</li>
                                <li class="section__list">Donación de Máquinas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Maquinaria Pesada</li>
                                <li class="section__list">Donación de Propiedades</li>
                                <li class="section__list">Donación de Repuestos</li>
                                <li class="section__list">Donación de Terrenos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Bienes e Inmuebles."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-7 d-none" id="donacion7">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Jueguetes
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Bicicletas</li>
                                <li class="section__list">Donación de Carritos de Juguetes</li>
                                <li class="section__list">Donación de Juegos Recreativos</li>
                                <li class="section__list">Donación de Juguetes</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Muñecas</li>
                                <li class="section__list">Donación de Pelotas</li>
                                <li class="section__list">Donación de Peluches</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Juguetes."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-8 d-none" id="donacion8">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Ortopédicos
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Andadores</li>
                                <li class="section__list">Donación de Aparatos Ortopédicos</li>
                                <li class="section__list">Donación de Bastones</li>
                                <li class="section__list">Donación de Camas Clínicas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Medicamentos</li>
                                <li class="section__list">Donación de Muletas</li>
                                <li class="section__list">Donación de Pañales Adultos</li>
                                <li class="section__list">Donación de Sillas de Ruedas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Ortopédicos."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-9 d-none" id="donacion9">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Alimentos
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Aceite</li>
                                <li class="section__list">Donación de Agua</li>
                                <li class="section__list">Donación de Atún</li>
                                <li class="section__list">Donación de Arroz</li>
                                <li class="section__list">Donación de Avena</li>
                                <li class="section__list">Donación de Cereales</li>
                                <li class="section__list">Donación de Comida de Bebé</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Conservas</li>
                                <li class="section__list">Donación de Fideos</li>
                                <li class="section__list">Donación de Frutas Enlatadas</li>
                                <li class="section__list">Donación de Jugos Envasados</li>
                                <li class="section__list">Donación de Menestras</li>
                                <li class="section__list">Donación de Sal</li>
                                <li class="section__list">Donación de Vegetales Enlatados</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Alimentos."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-10 d-none" id="donacion10">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Reciclaje General
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Baterías</li>
                                <li class="section__list">Donación de Cartón</li>
                                <li class="section__list">Donación de Chatarra</li>
                                <li class="section__list">Donación de Libros</li>
                                <li class="section__list">Donación de Reciclaje</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Saldo Almacén</li>
                                <li class="section__list">Donación de Saldo Depósitos</li>
                                <li class="section__list">Donación de Papel</li>
                                <li class="section__list">Donación de Plástico</li>
                                <li class="section__list">Donación de Vidrio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Reciclaje General."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-11 d-none" id="donacion11">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Metales y Chatarra
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Acero</li>
                                <li class="section__list">Donación de Aluminio</li>
                                <li class="section__list">Donación de Bronce</li>
                                <li class="section__list">Donación de Cobre</li>
                                <li class="section__list">Donación de Latón</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Metales</li>
                                <li class="section__list">Donación de Oro</li>
                                <li class="section__list">Donación de Plata</li>
                                <li class="section__list">Donación de Plomo</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Metales y Chatarra."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-12 d-none" id="donacion12">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md md:h-360">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Cosas Usadas
                            </p>
                        </div>
                        <ul class="px-md">
                            <li class="section__list">Donación de cosas usadas</li>
                            <li class="section__list">Donación de obejtos fuera de uso</li>
                        </ul>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de cosas usadas."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-13 d-none" id="donacion13">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md md:h-360">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Vehículos
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">Donación de Autos</li>
                                <li class="section__list">Donación de Buses</li>
                                <li class="section__list">Donación de Camiones</li>
                                <li class="section__list">Donación de Camionetas</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">Donación de Carros</li>
                                <li class="section__list">Donación de Motos</li>
                                <li class="section__list">Donación de Tractores</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación de Vehículos."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section donacion-content-14 d-none" id="donacion14">
            <div class="container">
                <div class="g-elements g-elements--responsive bg-light-rose border px-md py-md">
                    <div class="f-elements f-col">
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <p class="section__subtitle section__subtitle--primary">
                                Donación de
                            </p>
                            <p class="section__subtitle section__subtitle--secondary">
                                Traperos De Emaús
                            </p>
                        </div>
                        <div class="f-elements f-col md:f-row md:gap-sm">
                            <ul class="px-md">
                                <li class="section__list">En Barranco</li>
                                <li class="section__list">En Breña</li>
                                <li class="section__list">En Chorrillos</li>
                                <li class="section__list">En Jesús María</li>
                                <li class="section__list">En La Molina</li>
                                <li class="section__list">En La Victoria</li>
                                <li class="section__list">En Lince</li>
                                <li class="section__list">En Lurín</li>
                                <li class="section__list">En Magdalena del Mar</li>
                                <li class="section__list">En Miraflores</li>
                                <li class="section__list">En Pueblo Libre</li>
                                <li class="section__list">En Santa Anita</li>
                            </ul>
                            <ul class="px-md">
                                <li class="section__list">En San Borja</li>
                                <li class="section__list">En San Isidro</li>
                                <li class="section__list">En San Juan de Miraflores</li>
                                <li class="section__list">En San Luis</li>
                                <li class="section__list">En San Miguel</li>
                                <li class="section__list">En Santiago de Surco</li>
                                <li class="section__list">En Surquillo</li>
                                <li class="section__list">En Villa El Salvador</li>
                                <li class="section__list">En Villa María del Triunfo</li>
                                <li class="section__list">En Lima</li>
                                <li class="section__list">En Callao</li>
                                <li class="section__list">En Bellavista</li>
                            </ul>
                        </div>
                    </div>
                    <div class="f-elements f-col md:f-elements--center py-md mt-auto">
                        <div>
                            <a class="button button--primary" href="https://wa.me/+51994987202?text=Hola Traperos De Emaús San Camilo, deseo realizar una donación."><i class="bi bi-whatsapp"></i> Donar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FIN DE DONACIONES -->

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
    <script src="./js/showDonation.js"></script>
    
</body>
</html>