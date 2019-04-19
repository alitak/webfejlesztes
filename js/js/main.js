$(document).ready(function () {
    $(".load").click(function (e) {
        $.ajax({
            type: 'POST',
            url: "ajax.php",
            data: {
                "title": $("input[name=title]").val()
            },
            success: function (data) {
                $(".content").html(data);
            }
        });
        return false;
    });

});
