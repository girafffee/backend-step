showDOM = function(){
	var body = document.body;
	
	var str = getProp(body);
	out.innerHTML = "";
	
	out.innerHTML = str;
	
};

hideDOM = function(){
	out.innerHTML = "";
};

addLi = function(selector){
	// Добавляем новые элемент списка
	var v = document.createElement('LI');
	
	// Выбираем слектор
	var ul = document.querySelector(selector);
	v.innerText = "Add new Li";
	v.style.fontWeight = "900";
	v.style.color = "lime";
	
	//Вставляем в конец Списка
	ul.appendChild(v);
};

insLi = function(){
	var li = document.createElement('LI');
	var ul = document.querySelector("OL");
	var n = +num.value;
	
	li.innerText = "Add new Li++++";
	li.style.color = "red";
	
	var k = 0;
	for(let prop of ul.childNodes){
		if(clear(prop)) continue;
		k++;
		
		if(k === n){
			ul.insertBefore(li, prop);
			break;
		}
	}
	if(k !== n)
		alert("индекс вышел за границу");	
	
};

delLi = function(){
	var ol = document.querySelector("OL");
	var n = +delnum.value;
	var k = 0;
	
	for(let prop of ol.childNodes){
		if(clear(prop)) continue;
		k++;
		
		if(k === n){
			ol.removeChild(prop);
			break;
		}
	}
	if(k !== n)
		alert("индекс вышел за границу");
	
	
};

delALL = function(){
	var ol = document.querySelector("OL");
	while(ol.hasChildNodes())
		ol.removeChild(ol.lastChild);
	alert("ALL");
};

cloneUl = function(){
	var ul = document.querySelector("OL");
	// Клонируем со всеми вложенностями
	var newUl = ul.cloneNode(true);
	
	document.body.appendChild(newUl);
	
	newUl.style.border = "2px solid aqua";
	newUl.style.minHeight = "20px";
};


clear = function(prop){
	if(prop.nodeName === '#text' || prop.nodeName === '#comment')
		return true;
};

getProp = function(prnt){
	if(!prnt.hasChildNodes()) return "";
	else{
		var str = '<ul>';
		for(let prop of prnt.childNodes){
			if(clear(prop)) continue;
			
			str += '<li>' + prop.nodeName;
			str += getProp(prop);
			str += '</li>';
			
		}
		str += '</ul>';
		return str;
	}	
};

teory = function (){
	// Создание элемента DOM	
	var v = document.createElement('DIV');
	
	// Настройка / заполнение
	v.style.background = '#f00';
	v.innerText = "HELLO WORLD!";
	// Вставка в DOM
	document.body.appendChild(v);  // в конец body
	document.body.insertBefore(v, out);  //в указанное место
	
	// othernode.cloneNode(true); //копия othernode (c вложениями, если true)
	// othernode.removeChild(child); //удаление
	
	// Проверка на выборку радио-кнопки
	// .querySelector("input[type='radio']:checked");

};
















