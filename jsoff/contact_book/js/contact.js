window.onload = function(){
	let form = document.forms[0];
	form.onsubmit = setNum;
	form.onreset = resetAll;

	let input_tel = document.querySelector(".input_info input");
	input_tel.oninput = visibleCheckPhone;

	let name = form.querySelector("INPUT[name='firstname']");
	name.oninput = visibleCheckName;
	//alert(setNum);

};


function delTelRow(){

    let is_prev = (this.parentNode.previousSibling
        && this.parentNode.previousSibling.className === "row tels");
    let is_next = (this.parentNode.nextSibling
        && this.parentNode.nextSibling.className === "row tels");


    let previous;
    let nexted;
    if(countRow() === 2) {
        if (is_prev) {
            previous = [
                this.parentNode.previousSibling.firstChild,
                this.parentNode.previousSibling.lastChild,
                this.parentNode.previousSibling.lastChild.previousSibling
            ];
        } else if (is_next) {
            nexted = [
                this.parentNode.nextSibling.firstChild,
                this.parentNode.nextSibling.lastChild,
                this.parentNode.nextSibling.lastChild.previousSibling
            ];
        }
    }

    if(is_next || is_prev){
        this.parentNode.remove();
    }

    if(countRow() === 1){
        if(previous){
            for(let prev of previous)
                prev.remove();
        }else if(nexted){
            for(let next of nexted)
                next.remove();
        }
    }
}

countRow = function(){
    return document.querySelectorAll(".tels").length;
};


addTelNum = function() {
    // Клонируем первую строчку с номером телефона

    let tel_row = document.querySelector('.tels');
    let tel_row_new = tel_row.cloneNode(true);


    // Удаляем введенные значения из поля
    for (let tag of tel_row_new.childNodes){
        if(tag.className !== "input_info") continue;

        for(let item of tag.childNodes) {
            if(item.nodeName === "INPUT") {
                item.oninput = visibleCheckPhone;
                item.className = "";
                item.value = "";
            }

            if(item.className === "info") {
                item.innerText = "";
            }
        }
    }

    // Вставляем объект в конец
    // к родителю - блоку, содержащий все номера

    let parent_div = document.querySelector(".rows-flex");
    parent_div.appendChild(tel_row_new);



    let tels = document.querySelectorAll('.tels');

    outer:for(let i = 0; i < tels.length; i++){
        // Переменная для связи LABEL & INPUT [TYPE=RADIO]
        let name_id = "main_" + i;

        for(let tag of tels[i].childNodes) {

            if(tag && tag.className === "remove-button"){
                tag.onclick = delTelRow;
            }

            else if (tag.className === 'main'){
                tag.htmlFor = name_id;
            }
            else if (tag.type === "radio") {
                tag.id = name_id;
                continue outer;
            }
        }

        let rm_btn = document.createElement("SPAN");
        rm_btn.onclick = delTelRow;
        rm_btn.className = "remove-button";
        rm_btn.innerText = "X";
        

        let radio = document.createElement("INPUT");
        radio.type = "radio";
        radio.name = "main";
        radio.id = name_id;


        let lab_rad = document.createElement("LABEL");
        lab_rad.innerText = "Основной: ";
        lab_rad.className = "main";
        lab_rad.htmlFor = name_id;


		tels[i].prepend(rm_btn);
        tels[i].appendChild(lab_rad);
        tels[i].appendChild(radio);
    }

};

resetAll = function(){
  let info_blocks = document.querySelectorAll(".input_info");
  let firstname = [document.querySelector("INPUT[name='firstname']"),
      document.querySelector("#name_info")];

  for(let tag of firstname){
      if(tag.nodeName === "INPUT" && tag.className)
          tag.className = "";
      else if(tag.id === "name_info" && tag.innerText)
          tag.innerText = "";
  }

  for(let block of info_blocks){
      for(let tag of block.childNodes){
            if(tag.nodeName === "INPUT" && tag.className)
                tag.className = "";

            else if(tag.className === "info" && tag.innerText)
                tag.innerText = "";
      }
  }
};

visibleCheckPhone = function(){
    let info = this.nextSibling;
    let valid_phone = this.value.replace(/[\s-]+/g, "");


    if(valid_phone.length > 9) {
        if (checkPhone(valid_phone)) {
            this.className = "right-check";
            info.style.color = "#14a014"; // ярко-зеленый
            info.innerText = "Молодец, правильно!";
            // При правильном наборе цифр лишние знак
            // this.value = valid_phone;
        } else {
            this.className = "wrong-check";
            info.style.color = "orangered";
            info.innerText = "Чушь, пиши нормально!";
        }
    }else if(valid_phone.length === 0){
        this.className = "";
        info.innerText = "";
    }
    else{
        this.className = "warning-check";
        info.style.color = "coral";
        info.innerText = "Недостаточно цифр!";
    }
};

visibleCheckName = function(){
    let info = document.querySelector("#name_info");
    let valid_name = this.value.replace(/^\s*/, "")
        .replace(/\s*$/, "")
        .replace(/\s{1,}/g, " ");


    if(checkName(valid_name)){
        this.className = "right-check";
        info.innerText = "Правильно!";
        info.style.color = "#14a014";
        //this.value = valid_name;
    }else if(valid_name.length < 2){
        this.className = "";
        info.innerText = "";
    }
    else{
        this.className = "wrong-check";
        info.innerText = "Чушь, пиши нормально!";
        info.style.color = "orangered";
    }
};

checkName = function(nm){
    let reg_name = "[А-ЯA-Z]{1}[а-яa-z]+";
    let pattern = new RegExp(`^${reg_name}((-${reg_name})*)?( ${reg_name}(-${reg_name})*)?( ${reg_name})?$`);
    return pattern.test(nm);

    //return /^[А-Я]{1}[а-я]+((-[А-Я]{1}[а-я]+)*)?( [А-Я]{1}[а-я]+(-[А-Я]{1}[а-я]+)*)?( [А-Я]{1}[а-я]+)?$/.test(nm);
};

checkPhone = function(ph){
    // Не содержит символы!
    // return !/\D/.test(ph);
    // Содержит ровно 10 цифр!
    return /^((\+)?38)?(0)\d{9}$/.test(ph);
};

checkInput = function(inp){
    return (inp.className && inp.className === "right-check");
    /*else {
        switch (inp.className) {
            case "wrong-check":
                return "wrong";
                break;
            case "warning-check":
                return "warning";
                break;
            default:
                return null;

        }
    }*/
};

checkRadio = function(inp){
    return (inp.checked);
};


setNum = function(e){
    e.preventDefault();

    let submit = document.querySelector("input[type='submit']");
    submit.disabled = true;

    let blocks = [document.querySelectorAll(".tels input[type='tel']"),
        document.querySelectorAll("input[type='radio']") || [],
        document.querySelector("input[name='firstname']")];
    let count = 0;

    for(let input of blocks){

        if(input.length && input.length > 0){

            for(let tag of input){
                if(tag.type === "tel" && !checkInput(tag)) {
                    //tag.style["background-color"] = "#8e545b";
                    submit.disabled = false;
                    return false;
                }else if(tag.type === "radio" && checkRadio(tag))
                    count++;
                else{
                    tag.value = tag.value.replace(/[\s-]+/g, "")
                }
            }

        }else if(input.name === "firstname"){
            if(!checkInput(input)) {
                submit.disabled = false;
                return false;
            }else{
                input.value = input.value.replace(/^\s*/, "")
        .replace(/\s*$/, "")
        .replace(/\s{1,}/g, " ");
            }
        }else
            count++;
    }

    if(count === 0) {
        alert("Выберите основной телефон!");
        submit.disabled = false;
        return false;
    }


    let tels = document.querySelectorAll('.tels');

    for(let i = 0; i < tels.length; i++){

        for(let tag of tels[i].childNodes) {
            if(tag.className !== "input_info") {
                if (tag.nodeName === "LABEL") {
                    tag.htmlFor += i;
                } else if ((tag.nodeName === "INPUT" || tag.nodeName === "SELECT") && !(tag.type === "radio")) {
                    tag.id += i;
                    tag.name += i;
                } else if (tag.type === "radio") {
                    tag.value = i;
                }
            }else{
                for(let info_tag of tag.childNodes){
                    if(info_tag.nodeName === "INPUT"){
                        info_tag.id += i;
                        info_tag.name += i;
                    }
                }
            }
        }
    }

    e.target.submit();


    // e.preventDefault();
    //
    // e.target.submit();
    //
	// Прерывание обработки события
	// 	
};





clear = function(prop){
    if(prop.nodeName === '#text' || prop.nodeName === '#comment')
        return true;
};