/* 
Documento  : app.js
Criado em  : ...
Autor      : UX Solucoes em TI
Descricao  : JS ...
*/

$(document).ready(function() {
    $("#slider").owlCarousel({
        slideSpeed : 400,
        paginationSpeed : 400,
        singleItem:true,
        autoPlay: 3000,
        pagination: false
    });

    lightbox.option({
      'resizeDuration': 200,
      fadeDuration: 400
  })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    if ($(window).width() < 768) {
        $(".navbar-collapse").css("width", $(window).width() * 0.65);
    }
});

