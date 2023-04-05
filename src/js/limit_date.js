/* 
* @id_input_date:string | id dell'input type date di cui si vuole limitare la data
*
* @option:int | opzione per definire min o max
* -2 min + @years
* -1 min
* 1 max
* 2 max - @years
*
* @years:int | age min to have
*/
function limit_date(id_input_date, option, years) {
    var today=new Date();
    var dd=today.getDate();
    var mm=today.getMonth()+1;
    var yyyy=today.getFullYear();

    //se è specificato @years lo imposto a 0
    if (years==null) years=0;

    let attr='';
    switch (option) {
        case -2:
            attr='min';
            yyyy+=years;
            break;
        case -1:
            attr='min';
            break;
        case 1:
            attr='max';
            break;
        case 2:
            attr='max';
            yyyy-=years;
            break;
    }

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