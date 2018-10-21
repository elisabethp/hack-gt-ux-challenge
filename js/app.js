$("document").ready(function() {

    dragula([document.querySelector('#left-grid'), document.querySelector('#right-grid')]);
    /*dragula([document.querySelector('#grid')], {
        moves: function(el, container, handle) {
          return !handle.classList.contains('.widget');
        }
    });*/

    $('.movers').owlCarousel({
        items: 4,
        nav: true
    });
    /*$('.news').owlCarousel({
        items: 1,
        nav: true,
        autoWidth: true
    });*/

})