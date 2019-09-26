'use strict';

let img = document.querySelectorAll('.gallery .photos img');
let btn_prev = document.querySelector('.buttons #btn_prev');
let btn_next = document.querySelector('.buttons #btn_next');

let i = 0;
btn_next.onclick = function () {
    img[i].className = "hide";
    i++;
    if( i >= img.length){
        i = 0;
    }
    img[i].className = "show";
};

btn_prev.onclick = function () {
    img[i].className = "hide";
    i--;
    if(i < 0) {
        i = img.length - 1;
    }
    img[i].className = "show";
};





