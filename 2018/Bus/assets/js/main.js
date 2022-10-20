(function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header-mobile-menu');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }
}());




var i = 0;

    function incNumber() {
        if (i < 99) {
            i++;
        } else if (i = 99) {
            i = 0;
        }
        document.getElementById("card-number").value = i;
    }

    function decNumber() {
        if (i > 0) {
            --i;
        } else if (i = 0) {
            i = 99;
        }
        document.getElementById("card-number").value = i;
    }




