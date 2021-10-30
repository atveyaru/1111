<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Пример для css-live.ru</title>
        
        <style type="text/css">    
           * { margin: 0; padding: 0; }
           p { padding: 10px; }
           #left { position: absolute; left: 0; top: 0; width: 50%; }
           #right { position: absolute; right: 0; top: 0; width: 50%; } 
        </style>
        <style>
#calendarBig { /* весь календарь */ 
 position: absolute;
  width: auto;
  max-width: 800px;
  margin: 0 auto;
  border-spacing: 0 1.5em;
  left: 50px;
}
#calendarBig td {
  vertical-align: top;
}
#calendarBig > thead td:not(:nth-child(2)) { /* предыдущий-следующий года */ 
  text-decoration: underline;
  color: rgb(0, 119, 204);
  cursor: pointer;
}
#calendarBig > thead td:not(:nth-child(2)):hover { /* если наведён курсор на предыдущий-следующий года */ 
  color: #ff3200;
}
#calendarBig > thead td:nth-child(2) { /* текущий год */ 
  font-size: 150%;
  font-weight: 700;
  color: rgb(140, 61, 2);
}
#calendarBig, #calendarBig table {
  font: monospace;
  line-height: 1.2em;
  font-size: 15px;
  text-align: center;
}
#calendarBig table { /* таблицы с месяцами выравнены по верхней границе, горизонтально — по центру */ 
  display: inline-table;
}
#calendarBig table thead tr:nth-child(1) { /* названия месяцев */ 
  font-size: 110%;
  font-weight: 700;
}
#calendarBig table thead tr:last-child { /* название дней недели */ 
  font-size: small;
  font-weight: 700;
  color: rgb(103, 103, 103);
}
#calendarBig table tbody td { /* дни */ 
  color: rgb(44, 86, 122);
}
#calendarBig table tbody td:nth-child(n+6), #calendarBig .holiday { /* выходные и праздники */ 
  color: rgb(231, 140, 92);
}
#calendarBig table tbody td.today { /* сегодня */ 
  outline: 3px solid red;
}
#calendarBig table tbody td[title] { /* выделенные даты */ 
  outline: 3px solid green;
  background: yellow;
  cursor: help;
}
#calendarBig table tbody td[title] a { /* выделенные даты-ссылки */ 
  display: block;
  text-decoration: none;
}
#calendarBig table tbody td[title] a:hover { /* выделенные даты-ссылки под курсором */
  background: #fde910;
  color: red;
}
</style>

        
</head>

<body>
    <table id="calendarBig">
    <thead>
     <tr><td><td><td>
    <tbody>
     <tr>
       <td>
         <table data-m="0">
           <thead>
             <tr>
                 <td colspan="7">Январь</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         </td>
       <td>
         <table data-m="1">
           <thead>
             <tr><td colspan="7">Февраль</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
       <td>
           
         <table data-m="2">
           <thead>
             <tr><td colspan="7">Март</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
         </tr>
     <tr>
         
         
       <td>
         <table data-m="3">
           <thead>
             <tr><td colspan="7">Апрель</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         
         </td>
       <td>
           
           
         <table data-m="4">
           <thead>
             <tr><td colspan="7">Май</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
       <td>
           
         <table data-m="5">
           <thead>
             <tr><td colspan="7">Июнь</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
        </td> 
         
     </tr>    
     <tr>
         
         
       <td>
         <table data-m="6">
           <thead>
             <tr><td colspan="7">Июль</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
       <td>
           
         <table data-m="7">
           <thead>
             <tr><td colspan="7">Август</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
       <td>
           
         <table data-m="8">
           <thead>
             <tr><td colspan="7">Сентябрь</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
         </tr>
     <tr>
       <td>
         <table data-m="9">
           <thead>
             <tr><td colspan="7">Октябрь</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
       <td>
           
         <table data-m="10">
           <thead>
             <tr><td colspan="7">Ноябрь</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         
         </td>
       <td>
           
         <table data-m="11">
           <thead>
             <tr><td colspan="7">Декабрь</td>
            </tr>
            <tr>
                 <td>Пн</td>
                 <td>Вт</td>
                 <td>Ср</td>
                 <td>Чт</td>
                 <td>Пт</td>
                 <td>Сб</td>
                 <td>Вс</td>
            </tr>
           </thead>
           <tbody>
            </tbody>
         </table>
         </td>
         </tr>
   </table>
   
   
   
   
   <div id="calendarTable">
    <div data-dd="18" data-mm="8" data-text="День рождения"></div>
    <div data-dd="5" data-mm="1" data-yyyy="2013" data-text="регулярные выражения
  JavaScript примеры" data-link="http://shpargalkablog.ru/2013/07/replace.html"></div>
    <div data-dd="28" data-mm="11" data-yyyy="2013" data-text="✈ встреча у бабушки
  ☏ поздравить Вишкентия Евгенича) с именинами
  ☄ комета ISON"></div>
  </div>   


<span id="clock"
style="background-color: #2F4F4F; color: #00FF7F; border:4px outset #FFA500; padding:5px 20px"
</span>
<script>
             setInterval(function () {
    var now = new Date();
    var clock = document.getElementById("clock");
    clock.innerHTML = now.toLocaleTimeString();
}, 1000);
</script>
             <script>
function calendarBig(year) {
for (var m = 0; m <= 11; m++) {
var D = new Date(year,[m],1),
    Dlast = new Date(D.getFullYear(),D.getMonth()+1,0).getDate(),
    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
    calendar = '<tr>';

if (DNfirst != 0) {
  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
}else{
  for(var  i = 0; i < 6; i++) calendar += '<td>';
}

for(var  i = 1; i <= Dlast; i++) {
  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
    calendar += '<td class="today">' + i;
  }else{
    if (
        (i == 1 && D.getMonth() == 0 && ((D.getFullYear() > 1897 && D.getFullYear() < 1930) || D.getFullYear() > 1947)) ||
        (i == 2 && D.getMonth() == 0 && D.getFullYear() > 1992) ||
        ((i == 3 || i == 4 || i == 5 || i == 6 || i == 8) && D.getMonth() == 0 && D.getFullYear() > 2004) ||
        (i == 7 && D.getMonth() == 0 && D.getFullYear() > 1990) ||
        (i == 23 && D.getMonth() == 1 && D.getFullYear() > 2001) ||
        (i == 8 && D.getMonth() == 2 && D.getFullYear() > 1965) ||
        (i == 1 && D.getMonth() == 4 && D.getFullYear() > 1917) ||
        (i == 9 && D.getMonth() == 4 && D.getFullYear() > 1964) ||
        (i == 12 && D.getMonth() == 5 && D.getFullYear() > 1990) ||
        (i == 7 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 2005)) ||
        (i == 8 && D.getMonth() == 10 && (D.getFullYear() > 1926 && D.getFullYear() < 1992)) ||
        (i == 4 && D.getMonth() == 10 && D.getFullYear() > 2004)
       ) {
      calendar += '<td class="holiday">' + i;
    }else{
      calendar += '<td>' + i;
    }
  }
  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
    calendar += '<tr>';
  }
}

if (DNlast != 0) {
  for(var  i = DNlast; i < 7; i++) calendar += '<td>';
}

document.querySelector('#calendarBig table[data-m="' + [m] + '"] tbody').innerHTML = calendar;
document.querySelector('#calendarBig > thead td:nth-child(2)').innerHTML = 'Календарь на ' + year + ' год';
document.querySelector('#calendarBig > thead td:nth-child(1)').innerHTML = 'Календарь на ' + parseFloat(parseFloat(year)-1) + ' год';
document.querySelector('#calendarBig > thead td:nth-child(3)').innerHTML = 'Календарь на ' + parseFloat(parseFloat(year)+1) + ' год';

// абзац создаёт сообщения
for (var k = 1; k <= document.querySelectorAll('#calendarTable div').length; k++) {
  var myD = document.querySelectorAll('#calendarBig table td'),
      my = document.querySelector('#calendarTable div:nth-child(' + [k] + ')');
  for (var i = 0; i < myD.length; i++) {
    if (my.dataset.yyyy) {
      if (myD[i].innerHTML == my.dataset.dd && myD[i].parentNode.parentNode.parentNode.dataset.m == (my.dataset.mm - 1) && year == my.dataset.yyyy) {
        myD[i].title = my.dataset.text;
        if (my.dataset.link) {
          myD[i].innerHTML = '<a href="' + my.dataset.link + '" target="_blank">' + myD[i].innerHTML + '</a>';
        }
      }
    }else{
      if (myD[i].innerHTML == my.dataset.dd && myD[i].parentNode.parentNode.parentNode.dataset.m == (my.dataset.mm - 1)) {
        myD[i].title = my.dataset.text;
        if (my.dataset.link) {
          myD[i].innerHTML = '<a href="' + my.dataset.link + '" target="_blank">' + myD[i].innerHTML + '</a>';
        }
      }
    }
  }
}

}}

calendarBig(new Date().getFullYear());
document.querySelector('#calendarBig > thead td:nth-child(1)').onclick = calendarBigG;
document.querySelector('#calendarBig > thead td:nth-child(3)').onclick = calendarBigG;
function calendarBigG() {calendarBig(this.innerHTML.replace(/[^\d]/gi, ''));}

</script>



</body>
</html>