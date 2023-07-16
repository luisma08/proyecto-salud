<section class="section" id="contact">
    <div class="container f-elements f-elements--center f-col gap-md">
        <div class="g-elements g-elements--responsive bg-img py-md px-md">
            <div class="f-elements f-col gap-sm py-sm">
                <p class="section__description section__description--reverse-responsive">
                    Juntos podemos marcar la diferencia y brindar esperanza a quienes más lo necesitan
                </p>
            </div>
        </div>
        <div class="f-elements f-col f-elements--end gap-sm bg-form mt-sm">
            <form class="form f-elements f-col gap-md" id="contact-form">
            <p class="section__title section__title--primary text-uppercase">¿QUIERES SER PARTE DE ESTA <span class="section__title--span">CRUZADA?</span></p>
                <div class="f-elements f-col">
                    <input type="text" name="name" placeholder="Nombre y Apellido" class="form__input" id="name"/>
                </div>
                <div class="f-elements f-col">
                    <input type="tel" name="tel" placeholder="N de Teléfono / Celular" required class="form__input" id="tel"/>
                </div>
                <div class="f-elements f-col">
                    <input type="email" name="mail" placeholder="Correo electrónico" required class="form__input" id="mail"/>
                </div>
                <div class="f-elements f-col">
                    <input type="text" name="address" placeholder="Dirección" class="form__input" id="address"/>
                </div>
                <div class="f-elements f-col">
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
                <div class="f-elements f-col">
                    <textarea name="description" placeholder="Mensaje" required class="form__textarea" id="description"></textarea>
                </div>
                <div class="f-elements f-col f-elements--end">
                    <button class="button button--primary" id="submit">Enviar <i class="bi bi-caret-right-fill"></i></button>
                </div>
                <div id="response"></div>
            </form>
        </div>
        <script src="./js/form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </div>
</section>