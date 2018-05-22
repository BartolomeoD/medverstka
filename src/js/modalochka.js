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