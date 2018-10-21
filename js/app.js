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

    d3.json('json/cumulativeLineData.json', function(data) {
        data = MG.convert.date(data, 'date');
        MG.data_graphic({
            chart_type: "line",
            data: data,
            color: ['tomato', '#f45531'],
            area: false,
            left: 5,
            right: 5,
            full_width: true,
            full_height: true,
            xax_count: 4,
            y_axis: false,
            x_axis: false,
            target: '#graph-svg'
        });

    });


})