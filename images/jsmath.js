
function checkForm(el){

var el = document.getElementById('mathtrening');
var name= el.name.value;
var clas=el.class.value;
var cons=el.cons.value;
var summ=el.summ.value;
var subtrac=el.subtrac.value;
var multiplic=el.multiplic.value;
var division=el.division.value;
var fail="";
  if (name=="")
    fail="Я не знаю, как к тебе обращаться. :-( Как тебя зовут?";
  else if (name.length<=1 || name.length>15)
    fail="Сомневаюсь, что это твое имя? Я не знаю, как к тебе обращаться. :-( Как тебя зовут?";
  else if (cons=="" || cons=="нет")
    fail="Если не соглашаешься, то я останусь здесь."

if (fail!=""){
  document.getElementById('error').innerHTML=fail;
return false;
}
else {
  fail="Приятно с тобой познакомиться, "+name+"!";
  document.getElementById('error').innerHTML=fail;
  return true;
}

}
