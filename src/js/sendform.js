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
                openModal($("#success"));
            }
        });
    })