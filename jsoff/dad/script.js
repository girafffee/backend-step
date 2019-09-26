var drag = false;
var click = [];

d1.onmousedown = (e)=>{
    drag = true;
    click = [e.offsetX, e.offsetY];
};

document.onmouseup = ()=>{
    drag = false;
};

document.onmousemove = (event)=>{
    if(drag){
        if(event.pageX > d1.style.left)
            d1.style.left = "-"+event.pageX - click[0] + "px";
        else
            d1.style.left = event.pageX - click[0] + "px";

        if(event.pageY < d1.style.top)
            d1.style.top = "-"+event.pageY - click[1] + "px";
        else
            d1.style.top = event.pageY - click[1] + "px";

        
    }
    else{
        d1.style.left = '50%';
        d1.style.top = '50%';
    }

};
