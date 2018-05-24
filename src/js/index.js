import 'owl.carousel/dist/assets/owl.theme.green.css';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
import 'jquery-mask-plugin';

$(".phone-input").mask("+7 (000) 000-00-00");

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
    $(".bot .mobile").click(function (e) {
		$(this).next().toggleClass("active");
	})
});


$('.open-call-form').click(function (e){
    openModal($("#call-modal"));
});

function openModal(modal) {
    //console.log(document.getElementById('blackbg'));
    if ($('#blackbg').length != 0) {
        var blackbg = $('#blackbg');
        console.log('exist');
        var save = blackbg.find('.show-modal');
        save.removeClass('show-modal');
        //blackbg.childNodes[0].remove();
        $('body').append(save);
        
    } else {
        $('body').css('overflow', "hidden");
        var blackbg = $('<div/>', {
            id: "blackbg",
            class: "black-bg",
            css: {
                'opacity' : 0
            }
        });
    }
    //console.log(blackbg);
    blackbg.bind("click", function(e) {
        if ($(e.target).attr("id") == "blackbg") {
            closeModal();
        }
    })
    var close = $('<div/>', {
        class: "close-button"
    });
    close.bind("click", function(e) {
        closeModal();
    });
    modal.append(close);
    $('body').append(blackbg);
    blackbg.animate({
        opacity: 1
    }, 500);
    blackbg.append(modal);
    modal.addClass("show-modal");
    modal.animate({
        opacity: 1
    }, 500);
}

function closeModal() {
    $('body').css('overflow', "auto");
    var blackbg = $('#blackbg');
    blackbg.find('.close-button').remove();
    var save = blackbg.children();
    blackbg.children().remove();
    blackbg.animate({
        opacity: 0
    }, 500, function(e) {
        //console.log(save);
        $('body').append(save);
        save.css("display","none");
        save.css("opacity",0);
        blackbg.remove();
    });
}

$("form").on("submit", function(e) {
    var data = new FormData(this);
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: $(this).attr("url"),
        data: data,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function(data) {
        }
    });
    openModal($("#success"));
})

$("a").each(function() {
    if (document.location.pathname.replace(new RegExp("/",'g'),'').length == 0) {
        $('a[href="/"]').addClass('active');
        return false;
    }
    if ($(this).attr('href').indexOf(document.location.pathname.replace(new RegExp("/",'g'),'')) != -1) {
        $(this).addClass('active');
    }
})

$(".show-all").click(function(e) {
    $(this).parent().addClass('show-all');
    $(this).hide();
})