var orderLink = document.querySelector(".preview__button");
var popup = document.querySelector(".modal__order"); 
var modalOverlay = document.querySelector(".modal_overlay");

var modalClose = document.querySelector(".modal__order .modal_close");
var nameUser = popup.querySelector("[name=name]");


orderLink.addEventListener("click", function (evt) {
    evt.preventDefault();
    popup.classList.add("modal-show");
    modalOverlay.classList.add("show");
    nameUser.focus();
});

modalClose.addEventListener("click", function (evt) {
    evt.preventDefault();
    popup.classList.remove("modal-show");
    modalOverlay.classList.remove("show");
});

window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    evt.preventDefault();
    
    if (popup.classList.contains("modal-show")) {
      popup.classList.remove("modal-show");
      modalOverlay.classList.remove("show");
    }
  }
});
