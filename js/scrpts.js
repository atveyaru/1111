
function f_clki9(pge) {
    document.location.href = pge
}




var qty_nullDays = 0;
var div_qty = 0;

function getLastDayOfMonth(year, month) {
    let date = new Date(year, month + 1, 0);
    return date.getDate();
}

function f_nullDIV(oo) {
    var nullDate = new Date();
    nullDate.setDate(1);
    var dnd = nullDate.getDay()
    
    var divCLDR_N = document.getElementById("divCLDR_"+oo);
    
    for(i=1; i<=dnd-1; i++){
        var divNUll = document.createElement("div");
        divNUll.className = "nullLDR";
        divNUll.innerHTML = "&nbsp;";
        divCLDR_N.append(divNUll);
    }
}


var mesyac_arr = [
                    'январь', 'февраль', 'март', 
                    'апрель','май', 'июнь', 'июль', 
                    'август','сентябрь', 'октябрь', 
                    'ноябрь', 'декабрь'
        
                ];
    var curDate = new Date();
    
function sozdCLDR(g, o){

    var loopDate = new Date();
    
    var divCLDR_N = document.getElementById("divCLDR_"+o);

    nameCLDR.innerHTML = mesyac_arr[curDate.getMonth()] + "&nbsp;" + curDate.getFullYear();

    for(i=1; i<=getLastDayOfMonth(curDate.getFullYear(), curDate.getMonth()); i++){
        var divD = document.createElement("div");
        loopDate.setDate(i)
        divD.className = "dyaCLDR";
        divD.setAttribute("name","day_"+g)
        divD.innerHTML = "<div style='margin-top: 9px;'>"+i+"</div>";
        if (i == curDate.getDate()) divD.className = "cuurCLDR"; 
        if (loopDate.getDay() == 6) divD.className = "hppDay"; 
        if (loopDate.getDay() == 0) divD.className = "hppDay"; 
        divCLDR_N.append(divD);
    }
}










function f_nullDIV_1() {
    alert
    var nullDate = new Date();
    nullDate.setDate(1);
    var dnd = nullDate.getDay()
    qty_nullDays = dnd-1
    
    for(i=1; i<=dnd-1; i++){
        var divNUll = document.createElement("div");
        divNUll.className = "nullLDR";
        divNUll.innerHTML = "&nbsp;";
        divCLDR_1.append(divNUll);
    }
}


var divCLDR_N
var week_num = 1 

function sozdCLDR_1(g) {

    var loopDate = new Date();

    nameCLDR.innerHTML = mesyac_arr[curDate.getMonth()] + "&nbsp;" + curDate.getFullYear();
    
    week_num = 1
    divCLDR_N = document.getElementById("divCLDR_"+week_num);
    div_qty = qty_nullDays;

    for(i=1; i<=getLastDayOfMonth(curDate.getFullYear(), curDate.getMonth()); i++){
        
        var divD = document.createElement("div");
        loopDate.setDate(i)
        divD.className = "dyaCLDR_SU";
        //divD.setAttribute("name","day_"+g)
        divD.innerHTML = "<div style='margin-top: 9px;'>"+i+"</div>";
        if (i == curDate.getDate()) divD.className = "cuurCLDR_SU"; 
        if (loopDate.getDay() == 6) divD.className = "hppDay_SU"; 
        if (loopDate.getDay() == 0) divD.className = "hppDay_SU"; 
        divCLDR_N.append(divD);

        div_qty = div_qty + 1
        if (div_qty == 7) {
            div_qty = 0;
            week_num++
            divCLDR_N = document.getElementById("divCLDR_"+week_num);
        }



    }
}









/* ****** *******   */
/* clock_div *******   */

var tmr = setInterval(f_clock, 1000);

function f_clock(){

    var clock = new Date()

    var hh24 = (clock.getHours().toString().length == 2)?clock.getHours():'0' + clock.getHours();
    var mi24 = (clock.getMinutes().toString().length == 2)?clock.getMinutes():'0' + clock.getMinutes();
    var ss24 = (clock.getSeconds().toString().length == 2)?clock.getSeconds():'0' + clock.getSeconds();

    clk_hh.innerHTML = hh24;
    clk_mi.innerHTML = mi24;
    clk_ss.innerHTML = ss24;
}

var divOPa = 1
// http://vsigaretti.tk/index_2.html
var tmr = setInterval(f_dots, 10);
function f_dots() {
    //alert("divOPa=" + divOPa + " "+ dots_SS.style.opacity)
/*
    divOPa = divOPa + 1
    divDebag.innerHTML = divOPa
    dots_SS.style.opacity = divOPa * 0.01
    */
}


/* clock_div *******   */
/* ****** *******   */