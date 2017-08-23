(function() {
"use strict";

var formOne = document.getElementById('formDivOne');
var formTwo = document.getElementById('formDivTwo');

var btn = document.querySelector('.openUpload');
var btnTwo = document.querySelector('.formUploadBtn');


var span = document.getElementsByClassName("close")[0];
var spanTwo = document.getElementsByClassName("closeBtn")[0];

var One = document.querySelector('.divOne');
var Two = document.querySelector('.divTwo');
var Three = document.querySelector('.divThree');


btn.onclick = function slideIn() {
	console.log("form One Open")
    formOne.style.display = "block";
 TweenMax.to(formOne, 0, {autoAlpha:0, top:1000, onclick:slideIn});
 TweenMax.to(formOne, 1,{autoAlpha:1, top:0, ease: Power2.easeInOut});
};

span.onclick = function fadeOut() {
	console.log("form One Closed")
    formOne.style.display = "block";
     TweenMax.to(formOne, 0, {autoAlpha:1, top:0, onclick:fadeOut});
 TweenMax.to(formOne, 1,{autoAlpha:0, top:1000, ease: Power2.easeInOut});
};

btnTwo.onclick = function formSlideIn() {
	console.log("form Two Open")

    formTwo.style.display = "block";
 TweenMax.to(formTwo, 0, {autoAlpha:0, top:1000, onclick:formSlideIn});
 TweenMax.to(formTwo, 1,{autoAlpha:1, top:0, ease: Power2.easeInOut});
};


spanTwo.onclick = function formFadeOut() {
	console.log("form One Closed")

    formTwo.style.display = "block";
     TweenMax.to(formTwo, 0, {autoAlpha:1, top:0, onclick:formFadeOut});
 TweenMax.to(formTwo, 1,{autoAlpha:0, top:1000, ease: Power2.easeInOut});
};

TweenMax.to(One, 0, {autoAlpha:0, onComplete:loadIn});
TweenMax.to(Two, 0, {autoAlpha:0, onComplete:loadIn});
TweenMax.to(Three, 0, {autoAlpha:0, onComplete:loadIn});

function loadIn() {
  TweenMax.to(One, 1,{autoAlpha:1, ease: Power1.easeInOut});
  TweenMax.to(Two, 1.5,{autoAlpha:1, ease: Power1.easeInOut});
  TweenMax.to(Three, 2,{autoAlpha:1, ease: Power1.easeInOut});
}

})();