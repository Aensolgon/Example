//popup
let popup = document.querySelector('.popup');
let close = document.getElementById('hmt');
let blackWindow = document.querySelector('.black-window');
let popupClose = document.querySelector('.popup-close');
let bodyElement = document.getElementById('myBody');
let applicationButton = document.querySelectorAll('.application-image');
for(let i = 0; i < applicationButton.length; i++){
    applicationButton[i].addEventListener('click', applicationButtonClick);
}
function applicationButtonClick() {
    popup.classList.add('popup-active');
    bodyElement.classList.add('darkMode');
    blackWindow.classList.add('black-window-active');
    close.checked = false;
}

popupClose.addEventListener('click', popupCloseClick);
function popupCloseClick() {
    bodyElement.classList.remove('darkMode');
    popup.classList.remove('popup-active');
    blackWindow.classList.remove('black-window-active');
}
//-----
