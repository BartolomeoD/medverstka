import 'owl.carousel/dist/assets/owl.theme.green.css';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

$(document).ready(function () {
    $('.carousel').owlCarousel({
        items: 2,
        nav: true,
        dots: false,
        responsive: {
            0:{
                items: 1
            },
            1140 : {
                items: 2
            }
        }
    });
});