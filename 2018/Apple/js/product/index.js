$("[data-watch-id]").change(function() {
  var value = $(this).data("watch-id");
  var type = $(this).attr("data-watch");
  var productSource = "../img/product/" + type;

  $("#a").attr("src", `${productSource}/${value}.jpg`);
  $("#ahover").attr("src", `${productSource}/${value}hover.jpg`);
  $("#abelt").attr("src", `${productSource}/${value}belt.jpg`);
});

$("[name=size]").change(function() {
  var isChecked = $('[data-case-type="44"]').is(":checked");
  var $this = $(this);

  var thisConnecitivity1Amount = $this.attr('data-connectivity-1-amount');
  var thisConnecitivity2Amount = $this.attr('data-connectivity-2-amount');


  $(".connectivity-price")
    .eq(0)
    .text(thisConnecitivity1Amount);
  $(".connectivity-price")
    .eq(1)
    .text(thisConnecitivity2Amount);

  if (isChecked) {
    $("[class*=m-product-slider]").attr(
      "class",
      "uk-panel m-product-slider-mdf"
    );
  } else {
    $("[class*=m-product-slider]").attr("class", "uk-panel m-product-slider");
  }

  $(this)
    .closest(".case-div")
    .siblings(".connectivity-div")
    .removeClass("disabled");

  $this.attr("data-changed", true);
});

$("[name=connectivity]").change(function() {
  $(this)
    .closest(".connectivity-div")
    .siblings(".buy-div")
    .removeClass("disabled");
});

// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}



$(document).ready(function(){
  $("#btn1").click(function(){
    alert("Text: " + $("#test").text());
  });
  $("#btn2").click(function(){
    alert("HTML: " + $("#test").html());
  });
});
