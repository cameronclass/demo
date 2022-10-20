// Uncomment to initialise WOW.js
new WOW().init();

var ukeVid = document.getElementById("uke");

// init controller
var controller = new ScrollMagic.Controller();

// build scene
var scene = new ScrollMagic.Scene({ triggerElement: "#uke", duration: 600 })
  .addTo(controller)

  .on("enter", function() {
    ukeVid.play();
  })
  .on("leave", function() {
    ukeVid.pause();
  });

// Uncomment to initialise WOW.js
new WOW().init();

$(document).ready(function() {
  $(".carousel").slick({
    dots: true
  });
});

var ukeVid2 = document.getElementById("uke2");

// init controller
var controller = new ScrollMagic.Controller();

// build scene
var scene = new ScrollMagic.Scene({ triggerElement: "#uke2", duration: 600 })
  .addTo(controller)
//  .addIndicators()

  .on("enter", function() {
    ukeVid2.play();
  })
  .on("leave", function() {
    ukeVid2.pause();
  });

// Uncomment to initialise WOW.js
new WOW().init();

$(document).ready(function() {
  $(".carousel").slick({
    dots: true
  });
});

var ukeVid3 = document.getElementById("uke3");

// init controller
var controller = new ScrollMagic.Controller();

// build scene
var scene = new ScrollMagic.Scene({ triggerElement: "#uke3", duration: 600 })
  .addTo(controller)

  .on("enter", function() {
    ukeVid3.play();
  })
  .on("leave", function() {
    ukeVid3.pause();
  });

// Uncomment to initialise WOW.js
new WOW().init();

$(document).ready(function() {
  $(".carousel").slick({
    dots: true
  });
});

var ukeVid4 = document.getElementById("uke4");

// init controller
var controller = new ScrollMagic.Controller();

// build scene
var scene = new ScrollMagic.Scene({ triggerElement: "#uke4", duration: 600 })
  .addTo(controller)

  .on("enter", function() {
    ukeVid4.play();
  })
  .on("leave", function() {
    ukeVid4.pause();
  });

document.body.addEventListener("touchmove", function(e) {
  document.getElementsByTagName("body")[0].style.height = "100%";
  document.getElementsByTagName("body")[0].style.overflow = "hidden";
});

let homeVideo2 = document.getElementById("uke2");
console.log(homeVideo2.src);

function myFunction(x) {
  if (x.matches) {
    // If media query matches
    homeVideo2.src = "img/watch-studio-mobile2.mp4";
  } else {
    homeVideo2.src = "img/watch-studio2.mp4";
  }
}

var x = window.matchMedia("(max-width: 576px)");
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes
console.log(homeVideo2.src);

//window.addEventListener('load', function() {
//    var video = document.querySelector('#uke2');
//    // var preloader = document.querySelector('.preloader');
//
//    function checkLoad() {
//        if (video.readyState === 4) {
//            // preloader.parentNode.removeChild(preloader);
//            alert('loaded')
//        } else {
//            setTimeout(checkLoad, 100);
//        }
//    }
//
//    checkLoad();
//}, false);