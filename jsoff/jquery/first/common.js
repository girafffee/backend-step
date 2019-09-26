$(document).ready( () => {

	/*setInterval ( () => {

		$(".blink").fadeOut(500);
		$(".blink").fadeIn(750);

	}, 1000);*/
	var htimer, ptimer;


	$("#b1").click( () => {
		ptimer = setInterval ( () =>{
			$(".add").fadeOut(500);
			$(".add").fadeIn(500);
		}, 1000);
	});

	$("#b2").click( () => {
		console.log(ptimer);
		clearInterval(ptimer);
	});


	$("#b3").on("click", () => {
		htimer = setInterval ( () => {

		$(".blink").fadeOut(500);
		$(".blink").fadeIn(500);

		}, 1000);
	});

	$("#b4").on("click", () => {
		//$("#b3").click( () => {});

		clearInterval(htimer);
	

	});

	//let ischeck;

	$("input[name='agreement']").change( () => {
		let check = $("input[name='agreement']").is(":checked");
		let but = $("input[name='sendButton']");

		if(check){
			but.removeAttr('disabled');
		}
		else{
			but.attr('disabled', 'disabled');
		}
	});



	$("input[name='setWeight']").click(function() {
		$("p.weight").each(function() {	
			var p = $(this);
			p.html(p.text().replace(/^(\w+)/, '<b>$1</b>'));
		});
	});




	$("input[name='getName']").click(() => {
		let val = $("input[name='name']").val();
		if(val){
			$("p#sayHello").html("Привет, <b>"+val+"</b>!").addClass("true").removeClass("false");
		}
		else{
			$("p#sayHello").text("Введите имя!").addClass("false").removeClass("true");
		}

	});

});
