<section class="section" id="contact">
    <div class="f-elements f-elements--center f-col">
        <div class="contact">
            <div class="container">
                <div class="f-elements f-col gap-sm">
                    <p class="contact__title">Formulario de Contacto</p>
                    <div class="f-elements f-col md:f-row md:f-row--reverse gap-md">
                        <div class="f-elements f-col md:w-50 f-elements--center">
                            <img src="./assets/img/contact.png" alt="logo" class="contact__img" />
                        </div>
                        <div class="f-elements f-col f-elements--center md:w-50">
                            <div class="f-elements f-col gap-md">
                                <p class="contact__description">
                                    El apoyo que nos brindan las empresas e instituciones privadas,
                                    públicas y familias de noble corazón mediante la donación de diversos artículos en desuso,
                                    nos permite seguir con esta labor social.
                                </p>
                                <p class="contact__description">
                                    Gracias a ti, apoyamos desde niños hasta adultos mayores ubicados en las zonas más alejadas de nuestro Perú,
                                    así como a Centros de Salud, Colegios, Asentamientos Humanos y familias que no tienen la solvencia económica
                                    para adquirir artículos de primera necesidad.
                                </p>
                                <p class="contact__description">
                                    De parte del equipo de Esperanza Viva, muchas gracias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="f-elements f-elements--center f-col gap-sm w-100">
                <form action="" method="" class="form f-elements f-col gap-sm" id="contact-form">
                    <div class="f-elements f-col gap-md">
                        <div class="g-elements g-template-columns-3fr gap-md">
                            <div class="f-elements f-col gap-md">
                                <input type="text" name="name" placeholder="Nombre y Apellido" class="form__input" id="name"/>
                            </div>
                            <div class="f-elements f-col gap-md">
                                <input type="tel" name="tel" placeholder="N de Teléfono / Celular" required class="form__input" id="tel"/>
                            </div>
                            <div class="f-elements f-col gap-md">
                                <input type="email" name="mail" placeholder="Correo electrónico" required class="form__input" id="mail"/>
                            </div>
                        </div>
                        <div class="g-elements g-elements--responsive gap-md">
                            <div class="f-elements f-col gap-md">
                                <input type="text" name="address" placeholder="Dirección" class="form__input" id="address"/>
                            </div>
                            <div class="f-elements f-col gap-md">
                                <select id="district" name="district" class="form__select form__select--disabled">
                                    <option disabled selected hidden class="input-disabled">Distrito</option>
                                    <option>Ancón</option>
                                    <option>Ate</option>
                                    <option>Barranco</option>
                                    <option>Breña</option>
                                    <option>Carabayllo</option>
                                    <option>Cercado de Lima</option>
                                    <option>Chaclacayo</option>
                                    <option>Chorrillos</option>
                                    <option>Cieneguilla</option>
                                    <option>Comas</option>
                                    <option>El agustino</option>
                                    <option>Independencia</option>
                                    <option>Jesús maría</option>
                                    <option>La molina</option>
                                    <option>La victoria</option>
                                    <option>Lince</option>
                                    <option>Los olivos</option>
                                    <option>Lurigancho</option>
                                    <option>Lurín</option>
                                    <option>Magdalena del mar</option>
                                    <option>Miraflores</option>
                                    <option>Pachacámac</option>
                                    <option>Pucusana</option>
                                    <option>Pueblo libre</option>
                                    <option>Puente piedra</option>
                                    <option>Punta hermosa</option>
                                    <option>Punta negra</option>
                                    <option>Rímac</option>
                                    <option>San bartolo</option>
                                    <option>San borja</option>
                                    <option>San isidro</option>
                                    <option>San Juan de Lurigancho</option>
                                    <option>San Juan de Miraflores</option>
                                    <option>San Luis</option>
                                    <option>San Martin de Porres</option>
                                    <option>San Miguel</option>
                                    <option>Santa Anita</option>
                                    <option>Santa María del Mar</option>
                                    <option>Santa Rosa</option>
                                    <option>Santiago de Surco</option>
                                    <option>Surquillo</option>
                                    <option>Villa el Salvador</option>
                                    <option>Villa Maria del Triunfo</option>
                                </select>
                            </div>
                        </div>
                        <div class="f-elements f-col gap-md">
                            <textarea name="description" placeholder="Mensaje" required class="form__textarea" id="description"></textarea>
                        </div>
                        <div class="f-elements f-col f-elements--center">
                            <button class="button button--secondary" id="submit">Enviar <i class="bi bi-caret-right-fill"></i></button>
                        </div>
                        <div id="response"></div>
                    </div>
                </form>
                <script src="./js/form.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </div>
        </div>
    </div>
</section>