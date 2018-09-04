document.addEventListener('DOMContentLoaded', function(event) {

  var page = document.getElementById("page");
  var senat = document.getElementById("senat");

  senat.addEventListener("mouseenter", function (event) {
    page.classList.add("background_senat");
  })
  senat.addEventListener("mouseleave", function (event) {
    page.classList.remove("background_senat");
  })

  var circo = document.getElementById("circo");

  circo.addEventListener("mouseenter", function(event) {
    page.classList.add("background_circo");
  })
  circo.addEventListener("mouseleave", function (event) {
    page.classList.remove("background_circo");
  })

}
)

$( document ).ready(function() {

$( ".div_cookies").show();
$( ".ok_div_cookies").click(function() {
$( ".div_cookies").slideToggle( "slow", function() {
$( ".div_cookies").hide();
});
});
});
