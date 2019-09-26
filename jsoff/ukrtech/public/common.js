
$(document).ready(() => {
    //var aj_folder = "app/Ajax_Queries/";

    $("#bin_num").click( (e) => {
        e.preventDefault();
        var number = 1;

        if($("input[name='idbin']").val() > 0 ) {
            number = $("input[name='idbin']").value;
            $("#path_form").submit();
        }
    });

    $("#addBin").click((e) => {
        e.preventDefault();

        var parent_id, pos = 0, flag = false;

        parent_id = $("#parent_id").val();

        $("input[name='pos']").each((i, item) => {
            if ($(item).is(":checked")) {
                flag = true;
            }
        });

        if(flag) {
            console.log("pos: " + pos);
            console.log("parent_id: " + parent_id);

            $("#bin").submit();


            /*$.ajax({
                url: aj_folder + "Binary.php",
                type: "GET",
                data: {
                    pos : pos,
                    par_id: parent_id,
                    mom: new Date()
                },
                dataType: "text"
            }).then((data) => {
                out.innerHTML = data;
            });*/
        }else{
            out.innerHTML = "<b>Выберите позицию!</b>";
        }

        //console.log($("input[name='parent_id']").val() + " " + $("input[name='pos']").val());
    });

    $("#parent_id").change(() => {
        $("#parent_id option:selected").each( function () {
            if(this.className === "left"){
                // Отключем правую кнопку
                $("#pos_right").attr("disabled", "disabled");
                $("#pos_right").removeAttr("checked");

                // Включаем и активируем левую
                $("#pos_left").attr("checked", "checked");
                $("#pos_left").removeAttr("disabled");

            }else if(this.className === "right") {
                // Отключаем левую кнопку
                $("#pos_left").attr("disabled", "disabled");
                $("#pos_left").removeAttr("checked");

                // Включаем и активируем правую кнопку
                $("#pos_right").attr("checked", "checked");
                $("#pos_right").removeAttr("disabled");
            }
            else{
                $("#pos_left").removeAttr("disabled");
                $("#pos_right").removeAttr("disabled");

                $("#pos_left").removeAttr("checked");
                $("#pos_right").removeAttr("checked");
            }


        });
    });
        
});