var muse = "";
var clack = false;
var blocks = document.querySelectorAll(".blocks");
var contain = document.querySelectorAll(".container");
var info = {};


document.oncontextmenu = () => {return false};

window.onload = () => {
    sub.onclick = () =>{
        let x = new XMLHttpRequest();
        let url = new URL(window.location + 'sortBalls.php');

        x.responseType = "text";

        let lf = "", rg = "";
        let balls = {left : [],right : []};

        
        for(let b of blocks){

            if(b.parentNode.classList.contains("cont1")){
                lf += b.id + " ";
                balls.left.push(b.id);

            }else if(b.parentNode.classList.contains("cont2")){
                rg += b.id + " ";
                balls.right.push(b.id);
            }
        }

        x.open("GET", url+"?data="+JSON.stringify(balls), true);
        x.send(null);

        left.innerHTML = lf;
        right.innerHTML = rg;

        x.onload = () =>{
            right.innerHTML += "<br/>" + x.response;
        }
        
        //left.innerText = str
    }


    if(contain){
        for(let con of contain){
            con.onmouseenter = (e) => {
                let oncont = e.target;
                if(muse && clack){
                    info[muse.id].isin = oncont;
                    oncont.style.border = "2px dashed black";
                }else{
                    oncont.style.border = "1px solid black";
                }
            };

            // con.onmouseup = (e) => {
            //     let oncont = e.target;
            //     if(muse && clack){
            //         info[muse.id].isin = oncont;
            // };

        }


    }
    if(blocks){
        for (let block of blocks){
            let stl = getComputedStyle(block);

            info[block.id] = {
                top:  stl.top,
                left: stl.left,
                bg: stl.background,
                isin: false
            };
            //alert(info[block.id].top + " " +info[block.id].left);

            
            block.onmouseenter = (e) => {
                muse = e.target;
                // for(let con of contain){
                //     con.style.background = info[muse.id].bg;
                // }
            };


            block.onmousedown = (e) => {
                e.preventDefault();
                clack = {
                    x: e.offsetX,
                    y: e.offsetY
                };
                muse = e.target;
                // for(let con of contain){
                //     con.style.background = info[muse.id].bg;
                // }

                muse.style.transform = "scale(1.1)";
                muse.style.zIndex = "10";
                muse.style.border = "1px solid black";

                if(info[muse.id].isin){
                    console.log("true");
                    document.body.appendChild(muse);
                    info[muse.id].isin = false;
                    muse.style.left = info[muse.id].left;
                    muse.style.top = info[muse.id].top;

                    /*
                    Перестановка
                    */
                    // let countper = 5;
                    // if(targ.childNodes){
                    //     for(let block of contain.childNodes){
                    //         block.style.top = "20%";
                    //         block.style.left = countper + "%";
                    //         countper += 15;
                    //     }
                    // }

                }
            };

            block.onmouseleave = (e) => {
                if(!clack)
                    for(let con of contain){
                        con.style.background = "";
                    }
            };

            block.onmouseup = (e) => {
                muse = e.target;
                muse.style.transform = "scale(1)";
                muse.style.border = "";
                muse.style.zIndex = "0";

                muse.style.left = info[muse.id].left;
                muse.style.top = info[muse.id].top;

                if(info[muse.id].isin){
                    let targ = info[muse.id].isin;
                    let countper = 5;
                    if(targ.childNodes){
                        for(let block of targ.childNodes){
                            countper += 15;
                        }
                    }
                    
                    muse.style.top = "20%";
                    muse.style.left = countper + "%";
                    targ.appendChild(muse);
                    targ.style.border = "1px solid black";
                    
                }

                muse = false;
                clack = false;               
            };

            //  = onmuseUp;
            // document.onmouseup = onmuseUp;

        }
    }

};

document.onmouseup = (e) => {
    if(muse && clack){
        muse.style.transform = "scale(1)";
        muse.style.border = "";
        muse.style.zIndex = "0";

        muse.style.left = info[muse.id].left;
        muse.style.top = info[muse.id].top;

        muse = false;
        clack = false;
    }
};

document.onmousemove = (e) => {
    if(muse && clack){
        
        if(e.pageX > info[muse.id].top)
            muse.style.left = "-"+e.pageX - clack.x + "px";
        else
            muse.style.left = e.pageX - clack.x + "px";

        if(e.pageY < info[muse.id].left)
            muse.style.top = "-"+e.pageY - clack.y + "px";
        else
            muse.style.top = e.pageY - clack.y + "px";
            muse.style.zIndex = "-1";
            let el = document.elementFromPoint(e.pageX, e.pageY).closest("P");
            //console.log(el)
            if(el && el.classList.contains("container")){
                el.style.border="2px dotted green";
            }
            muse.style.zIndex = "1";
    }
};