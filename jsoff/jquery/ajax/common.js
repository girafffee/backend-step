$(document).ready( () => {
    $("#sendStars").click(() => {
        //console.log($("input[name='r1']:checked").val())

        $("input[type='radio']").each( (i, r) => {
            if($(r).is(":checked"))
                console.log(r.id);
        })

    });

/*

    $("input[name='getName']").click( () => {

        $.ajax({
            url: "script.php",
            type: "POST",
            data: {
                name : $("input[name='name']").val(),
                lastname: $("input[name='lastname']").val(),
                mom: new Date()
            },
            success: function (data) {
                $("#out").html(data);
            },
            error: function () {
                $("#out").text("Ajax error");
            },
            complete: function () {
                $("#out").css("color", "navy");
            }
        })
    });

    $('input[name="receive"]').click(() => {
       $.ajax({
           url: "sender.php",
           dataType: "text"

       }).done((data) => {
           $("#out").html(data);

       }).fail(() => {
           $("#out").text("Ajax fail");

       }).always(() => {
           $("#out").css("color", "navy").css("font-weight", 900);

       });
    });

    $("input[name='promise']").click(() => {
       var rq = $.ajax({
           url: "sender.php",
           dataType: "JSON"
       });

       // Промис
       rq.then((data) => {
           // В случае успеха
           out.innerHTML  = data.name;

       }, () => {
           // В случае ошибки скрипта или JSON-разбора
           $("#out").text("Ajax fail !!!!!");
       });

    });*/

});
