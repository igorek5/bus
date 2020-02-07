var orderLink = document.querySelector(".preview__button");
var popup = document.querySelector(".modal__order"); 

var modalClose = document.querySelector(".modal__order .modal_close");
var nameUser = popup.querySelector("[name=name]");


orderLink.addEventListener("click", function (evt) {
    evt.preventDefault();
    popup.classList.add("modal-show");
    nameUser.focus();
});

modalClose.addEventListener("click", function (evt) {
    evt.preventDefault();
    popup.classList.remove("modal-show");
});
