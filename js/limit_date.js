/* 
* @option:int 
* -1 min
* 1 max
* 2 min @years
*
* @years:int | age min to have
*/
function limit_date(id_input_date, option, years) {
    let attr=0;
    if (option==1) attr='max';
    else if (option==-1) attr='min';
    else if (option==2) attr='max';

    var today=new Date();
    var dd=today.getDate();
    var mm=today.getMonth()+1;
    //se è specificato @years lo sottraggo all'anno corrente
    if (years!=null) var yyyy=today.getFullYear()-years;
    else var yyyy=today.getFullYear();

    if (dd<10) {
        dd='0'+dd;
    }

    if (mm<10) {
        mm='0'+mm;
    } 
        
    today=yyyy+'-'+mm+'-'+dd;
    document.getElementById(id_input_date).setAttribute(attr, today);
    return attr;
}