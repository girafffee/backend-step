var drag = false;
var click1 = [];
var coords = [];
var blocks = document.querySelectorAll(".drag");

window.onload = ()=>{
    for(let div of blocks){
        div.onmousedown = (e)=>{
            
            drag = e.target;
            coordsss = [drag.style.left, drag.style.top];

            e.preventDefault();
            click1 = [e.offsetX, e.offsetY];
        };
    }
};



document.onmouseup = ()=>{
    drag = false;
};

document.onmousemove = (e)=>{
    if(drag){
        if(e.pageX > coords[0])
            drag.style.left = "-"+e.pageX - click1[0] + "px";
        else
            drag.style.left = e.pageX - click1[0] + "px";

        if(e.pageY < coords[1])
            drag.style.top = "-"+e.pageY - click1[1] + "px";
        else
            drag.style.top = e.pageY - click1[1] + "px";

        
    }

};
