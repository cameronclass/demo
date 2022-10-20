(function(){
    var burger = document.querySelector('.click-burger'),
        header = document.querySelector('.header');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }

}());



let homeVideo = document.getElementById('uke')
console.log(homeVideo.src)


function myFunction(x) {
  if (x.matches) { // If media query matches
    homeVideo.src = "img/watch-studio-mobile.mp4";
  } else {
   homeVideo.src = "img/watch-studio.mp4";
  }
}

var x = window.matchMedia("(max-width: 576px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
;
console.log(homeVideo.src)
















