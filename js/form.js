document.querySelector("#submit").addEventListener("click", e => {
  e.preventDefault();

  //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
  const telefono = "51954746838";

  const name = document.querySelector("#name").value;
  const tel = document.querySelector("#tel").value;
  const mail = document.querySelector("#mail").value;
  const address = document.querySelector("#address").value;
  const district = document.querySelector("#district").value;
  const description = document.querySelector("#description").value;
  const resp = document.querySelector("#response");

  resp.classList.remove("fail");
  resp.classList.remove("send");

  const url = `https://api.whatsapp.com/send?phone=${telefono}&text=
        *Hola, Emaús Esperanza Viva*%0A
        *Quisiera Realizar una donación*%0A%0A
        *Mis datos de contacto son:*%0A
        *Nombre: ${name}%0A
        *Correo electrónico: ${mail}*%0A
        *N de Teléfono / Celular: ${tel}*%0A
        *Distrito: ${district}*%0A
        *Dirección: ${address}*%0A
        *Comentario:*%0A
        ${description}`;

  if (name === "" || mail === "") {
    resp.classList.add("fail");
    resp.innerHTML = `Faltan algunos datos, ${name}`;
    return false;
  }
  resp.classList.remove("fail");
  resp.classList.add("send");
  resp.innerHTML = `Se ha enviado tu mensaje, ${name}`;

  window.open(url);
});

document.querySelector(".form__select").addEventListener("click", e => {
  e.preventDefault();

  const formSelect = document.querySelector(".form__select");

  formSelect.classList.remove("form__select--disabled");
  formSelect.classList.add("form__select--active");

})