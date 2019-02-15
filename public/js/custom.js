let hover = document.querySelectorAll('.hover');
let interval;
let index;
let current;
let isBusy = false;
let slider1 = document.getElementById("slider");
let slider2 = document.getElementById("slider1");
let myBody = document.getElementById("myBody");
let alfaSlide = document.querySelectorAll('.alfabetImg');
let exit = document.getElementById('exit');

let mobileMenuButton = document.getElementById('menu-button');
let mobileMenu = document.getElementById('menu-list');

let sliderEl = document.getElementById('slider-alfa');
let headMenu = document.getElementById('mob-head-menu');
let shortText = document.querySelectorAll('.slider-short-text');
let centerText = document.querySelectorAll('.center-short-text');


if(mobileMenuButton){
    mobileMenuButton.addEventListener('click',(e) => {
        e.preventDefault();
        if(mobileMenu.classList.contains('show-menu')){
            window.location.href = mobileMenuButton.href;
        }
        headMenu.classList.add('mobile-height');
        mobileMenu.classList.add('show-menu');
    })
}

if(sliderEl){
    sliderEl.style.height = (document.body.scrollHeight+153)+"px";
}

if(exit){
    exit.addEventListener('click',function(){
        document.getElementById('slider').style.display = 'none';
        myBody.classList.remove('darkMode')
    })
}

if(alfaSlide){
    
    alfaSlide.forEach((item)=>{
        item.addEventListener('click',function (e) {
            let classMargin = document.querySelectorAll('.slider_margin');
            classMargin.forEach((iteml) => {
                if(iteml.dataset.index == e.currentTarget.dataset.ind){
                    iteml.classList.add('slider__item_active');
                }
                else{
                    iteml.classList.remove('slider__item_active');
                }
            });
            let currentSlider = document.getElementById('slider');
            currentSlider.style.display = 'inline-block';
            myBody.classList.add('darkMode');
        })
    })
}



function classExist(classStr) {
    if(current.classList.contains(classStr)){
        return true;
    }
    return false;
}
let screenMedium = window.matchMedia("(max-width:1024px)");
if (screenMedium.matches && slider1 && slider2) {
    slider1.style.display = "none";
}
else{
    slider2.style.display = "none";
}


function deleteInterval(classStr,delclass) {
    current.classList.remove(delclass);
    current.classList.add(classStr);
    interval = setTimeout(function () {
        console.log(current);
        current.childNodes[1].childNodes[4].classList.remove('unhover-text');
       
        current.classList.remove(classStr);
        //current.childNodes[1].style.display = "none";

        current.childNodes[1].classList.remove('fade-block'); 
        current = null;
    },500);
}

function clearActiveElement() {
    if(classExist('right-bottom')){
        deleteInterval('right-bottom-unhover','right-bottom-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('right-top')){
        deleteInterval('right-top-unhover','right-top-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');
    }
    else if(classExist('left-bottom')){
        deleteInterval('left-bottom-unhover','left-bottom-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');
    }
    else if(classExist('left-top')){
        deleteInterval('left-top-unhover','right-top-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');
    }
    else if(classExist('center')){
         deleteInterval('center-unhover','center-hover');
         current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('one-image')){
        deleteInterval('index','center-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('left-image')){
        deleteInterval('center-unhover-left','left-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('right-image')){
        deleteInterval('center-unhover-right','right-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('left-free')){
        deleteInterval('unhover-left','hover-left');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('right-free')){
        deleteInterval('unhover-right','hover-right');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('left-top-four')){
        deleteInterval('left-top-four-unhover','left-top-four-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('left-bottom-four')){
        deleteInterval('left-bottom-four-unhover','left-bottom-four-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
    else if(classExist('right-top-four')){
        deleteInterval('right-top-four-unhover','right-top-four-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');
    }
    else if(classExist('right-bottom-four')){
        deleteInterval('right-bottom-four-unhover','right-bottom-four-hover');
        current.childNodes[1].childNodes[4].classList.remove('textHover');
         current.childNodes[1].childNodes[4].classList.add('unhover-text');

    }
}


function addHover() {
    if(classExist('right-bottom')){
        current.classList.add('right-bottom-hover');
    }
    else if(classExist('right-top')){
        current.classList.add('right-top-hover');
    }
    else if(classExist('left-bottom')){
        current.classList.add('left-bottom-hover');
    }
    else if(classExist('left-top')){
        current.classList.add('left-top-hover');
    }
    else if(classExist('center')){
        current.classList.add('center-hover');
    }
    else if(classExist('one-image')){
        current.classList.add('center-hover');

    }
    else if(classExist('left-image')){
        current.classList.add('left-hover');

    }
    else if(classExist('right-image')){
        current.classList.add('right-hover');

    }
    else if(classExist('left-free')){
        current.classList.add('left-hover');

    }
    else if(classExist('right-free')){
        current.classList.add('right-hover');

    }
    else if(classExist('four-left-top-four')){
        current.classList.add('left-top-four');

    }
    else if(classExist('four-left-bottom-four')){
        current.classList.add('left-bottom-four');

    }
    else if(classExist('four-right-top-four')){
        current.classList.add('right-top-four');

    }
    else if(classExist('four-right-bottom-four')){
        current.classList.add('right-bottom-four');
    }
}


if(hover){
   hover.forEach((item)=>{
        window.clearInterval(interval);
        item.addEventListener("mouseenter",function (e) {

            if(current == null){
                current = e.currentTarget;
                console.log(current);
                
                addHover();
                setTimeout(function () {
                    //current.childNodes[1].style.display = "block";
                    current.childNodes[1].childNodes[4].classList.add('textHover');
                     current.childNodes[1].classList.add('fade-block');
                     
                },500);

            }
            else
            {
                return false;
            }
        });

        item.addEventListener("mouseleave",function (e) {
            clearActiveElement();
        });
    })

}



let saveRequest = document.getElementById('saveRequest');
let saveRequest1 = document.getElementById('saveRequest1');

if(saveRequest1){

    saveRequest1.addEventListener("submit", function(e){
        e.preventDefault();


        var request = ajax({
            method: 'get',
            url: '/request',
            data: {
                name: document.getElementById('name1').value,
                email: document.getElementById('email1').value,
                message: document.getElementById('message1').value,
                services: document.getElementById('services1').value
            }
        })

        request.then(function (response) {
            console.log(response);
        })
    });



    saveRequest.addEventListener("submit", function(e){
        e.preventDefault();


        var request = ajax({
            method: 'get',
            url: '/request',
            data: {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value,
                services: document.getElementById('services').value
            }
        })

        request.then(function (response) {
            console.log(response);
        })
    });
}

let saveCalling = document.getElementById('saveCalling');

if(saveCalling){
    saveCalling.addEventListener("submit", function(e){
        e.preventDefault();


        var calling = ajax({
            method: 'get',
            url: '/calling',
            data: {
                name: document.getElementById('form_call-name').value,
                phone_number: document.getElementById('form_call-phone').value
            }
        })

        calling.then(function (response) {
            console.log(response);
        })
    });
}

let saveQuestion = document.getElementById('saveQuestion');

if(saveQuestion){
    saveQuestion.addEventListener("submit", function(e){
        e.preventDefault();


        var question = ajax({
            method: 'get',
            url: '/question',
            data: {
                name: document.getElementById('form_name').value,
                email: document.getElementById('form_email').value,
                question: document.getElementById('form_message').value
            }
        })

        question.then(function (response) {
            console.log(response);
        })
    });

}




