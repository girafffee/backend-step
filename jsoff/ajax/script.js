let x = new XMLHttpRequest();
//let nbu_url = new URL(window.location + 'getRandom.php');

x.responseType = "json";

var url = "https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json";


/*x.onreadystatechange = () => {


    if(x.readyState === 1)
        rnd.innerHTML += "<b>Запрос был отправлен!</b><br/>";

    if(x.readyState === 2)
        rnd.innerHTML += "<b>Получены заголовки!</b><br/>";

    if(x.readyState === 3)
        rnd.innerHTML += "<b>Ответ в процессе передачи!</b><br/>";

    //console.log(d);
};*/

x.onerror = () => {
  alert('Ошьибочка!');
};

x.onload = () =>{
  // rnd.innerHTML += "<b>" + x.response + "</b><br/>";
    //let j = JSON.parse(x.response);
    let j = x.response;
    let str = "";


    str += "<table>";
    for(let k of j){
        str += "<tr>";
        str += `<td>${k.r030}</td> <td>${k.txt}</td> <td>${k.rate}</td> <td>${k.cc}</td> <td>${k.exchangedate}</td>`;
        str += "</tr>";
    }

    str += "</table>";
    rnd.innerHTML += str;

};


function getRnd(){
    x.open("GET", url, true);
    x.send(null);
    // url.searchParams.set("min", min1.value);
    // url.searchParams.set("max", max1.value);

   /* x.open("GET", url, true);
    x.send(null);*/


}

//setInterval(getRnd, 1000);