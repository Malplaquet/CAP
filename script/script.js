document.addEventListener('DOMContentLoaded', function() {
    const page = document.getElementById('page');
    const senat = document.getElementById('senat');
    const circo = document.getElementById('circo');
    const label = document.querySelectorAll('div.label > label');
    console.log(label);
    const labelContent = label.item(0);
    console.log(labelContent);
    labelContent.innerHTML('foo');

    const content = document.querySelectorAll('content');
    const crmSubmitButtons = document.querySelectorAll('crm-submit-buttons');


    senat.addEventListener('mouseenter', function(event) {
        page.classList.add('background_senat');
    });
    senat.addEventListener('mouseleave', function(event) {
        page.classList.remove('background_senat');
    });
    circo.addEventListener('mouseenter', function(event) {
        page.classList.add('background_circo');
    });
    circo.addEventListener('mouseleave', function(event) {
        page.classList.remove('background_circo');
    });
    label.classList.add('col-2');
    content.classList.add('col-2');
    crmSubmitButtons.classList.add('col-2');
    label.innerHTML = '<div>Adresse email :</div>';
});
$( document ).ready(function() {

  $( ".div_cookies").show();
  $( ".ok_div_cookies").click(function() {
    $( ".div_cookies").slideToggle( "slow", function() {
      $( ".div_cookies").hide();
    });
  });
});
