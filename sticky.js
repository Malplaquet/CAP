//sticky header
// Une que le DOM est entièrement chargé, on lance la fonction de sticky, sinon la fonction s'execute avant que l'html ne soit entièrement généré, et donc l'id "stickyheader" n'existe pas encore
document.addEventListener('DOMContentLoaded', function(event) {
  window.onscroll = function() {myFunction()};

  var header = document.getElementById("stickyheader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
}
)
