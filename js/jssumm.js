some();//вызываем функцию генерации слагаемых и вычисления

var count = 10;//переменная счетчика количества заданий, уменьшается только в случае правильного ответа
var no_true=0;//переменная счетчика количества ошибок
var ok_true=0;//переменная счетчика количества верных ответов (пока не нужна)
var total=0;//переменная счетчика общего количества заданий
var marker=document.getElementById("mark");//открытие доступа к выводу оценки
function some() {//функция генерации слагаемых и вычисления суммы
	var firstsum= Math.floor(Math.random() * Math.floor(10));//генерация первого слагаемого
	var secondsum= Math.floor(Math.random() * Math.floor(10));//генерация второго слагаемого
	let sammand1=document.getElementById("first");//открытие доступа к выводу первого слагаемого
	sammand1.innerHTML=firstsum;//вывод первого слагаемого
	let sammand2=document.getElementById("second");//открытие доступа к выводу второго слагаемого
	sammand2.innerHTML=secondsum;//вывод второго слагаемого
	let error_s=document.getElementById("error_s");//открытие доступа к выводу сообщений о результатах действий пользователя
	error_s.innerHTML="Новый пример. Жду твоего ответа.";//сообщение о новом примере
	var result=firstsum+secondsum; //вычисление суммы (тут снова value было недописано)
	let out=document.querySelector("input.out");//объявляем и инициализируем переменную для обработки события кнопки "Продолжить"
	out.addEventListener("click", some);//вызов функции some после события "нажатие" кнопки "Продолжить"
	//userAnswer(); //передаем параметры вызываем функцию (эта строка сразу выдает сообщение о неверном ответе из-за того, что следующая функция отрабатывает раньше времени)
	out.removeEventListener("click", some2);
	out.addEventListener("click", some)//отменяем вызов функции some (генерация однозначных чисел) после нажатия кнопки "Продолжить"
}//закрытие функции some

let choice2=document.querySelector("input.type2");//объявляем и инициализируем переменную для обработки события выбора одно- или двухзначных чисел
let choice=document.querySelector("input.type1");
let check=document.querySelector("input.check");//объявляем и инициализируем переменную для обработки события кнопки "Проверить" (указание функции события в конце кода)

function some2() {//функция генерации слагаемых и вычисления суммы двузначных чисел
	var firstsum= Math.floor(Math.random() * Math.floor(100));//генерация первого слагаемого
	var secondsum= Math.floor(Math.random() * Math.floor(100));//генерация второго слагаемого
	let sammand1=document.getElementById("first");//открытие доступа к выводу первого слагаемого
	sammand1.innerHTML=firstsum;//вывод первого слагаемого
	let sammand2=document.getElementById("second");//открытие доступа к выводу второго слагаемого
	sammand2.innerHTML=secondsum;//вывод второго слагаемого
	let error_s=document.getElementById("error_s");//открытие доступа к выводу сообщений о результатах действий пользователя
	error_s.innerHTML="Новый пример. Жду твоего ответа.";//сообщение о новом примере
	var result=firstsum+secondsum; //вычисление суммы
	//userAnswer(); //передаем параметры вызываем функцию (эта строка сразу выдает сообщение о неверном ответе из-за того, что следующая функция отрабатывает раньше времени)

	let out=document.querySelector("input.out");//объявляем и инициализируем переменную для обработки события кнопки "Продолжить"
	out.addEventListener("click", some);//вызов функции some после события "нажатие" кнопки "Продолжить"
	out.removeEventListener("click", some);//отменяем вызов функции some (генерация однозначных чисел) после нажатия кнопки "Продолжить"
	out.addEventListener("click", some2)//назначаем вызов новой функции some2 (генерация двузначных чисел) после нажатия кнопки "Продолжить"
}//закрытие функции some2
choice2.addEventListener("click", some2);//активация функции some2 (генерация двузначных чисел) после выбора селектора типа radio "однозначными и двузначными числами"
choice.addEventListener("click", some);
function userAnswer() {//функция принятия и обработки ответа пользователя

	let sammand1=document.getElementById("first").innerHTML;//получение значения первого слагаемого из функции some или some2
	let sammand2=document.getElementById("second").innerHTML;//получение значения второго слагаемого из функции some или some2
	//console.log(total);
	var result_data = Number.parseInt(sammand1) + Number.parseInt(sammand2);//вычисление суммы
	//console.log(result_data);
	var user_answer=document.getElementById("result").value;//открытие доступа к полю ввода ответа пользователя
	var answer=document.getElementById("answer");//открытие доступа к выводу ответа пользователя
	answer.innerHTML=user_answer;//вывод ответа пользователя

	if (user_answer==result_data) {//сравнение ответа пользователя с результатом умножения
		error_s.innerHTML="Правильно! Умничка! Так держать! Нажми 'Продолжить'";//отметка верного результата
		ok_true++;//счетчик количества правильных ответов увеличивается на единицу
		//console.log(ok_true);
		count--;//счетчик ограничения количества заданий уменьшается на 1
		// вообще удалите – count--; это же переменная, что контролируется в цикле
		// console.log(count);
		total++;//увеличение переменной общего количества заданий на 1

	if (count == 0) {
									$("#out").hide();
									$(".check").hide();
									$("#new").removeClass("invisible");

									// end.opasity=0;
									error_s.innerHTML="Молодец! Твои результаты: ";//проверка счетчика ограничения количества заданий и вывод итогового сообщения пользователю
									var task=document.getElementById("total");//открытие доступа к выводу общего количества выполненных заданий
									task.innerHTML="Заданий: "+total;//вывод общего количества выполненных заданий на экран
									var notrue=document.getElementById("notrue");//открытие доступа к выводу количества ошибок
									notrue.innerHTML="Ошибок: "+no_true;//вывод количества ошибок на экран
									var mark=total-no_true;//эта переменная вычисляет оценку выполнения заданий от количества заданий отнимается количество ошибок
									marker.innerHTML="Оценка: "+mark;//вывод оценки на экран
									$("#new").click(function(){
										location.reload();
									});
								}

	} else
		{error_s.innerHTML="Не торопись! Подумай!";//вывод сообщения в случае ошибочного ответа пользователя
		no_true++;
		var notrue=document.getElementById("notrue");//открытие доступа к выводу количества ошибок
		notrue.innerHTML="Ошибок: "+no_true;//вывод количества ошибок на экран
//console.log(no_true);
		}
let prize=document.getElementById("victory");
if(count==0 && mark>8){
		prize.innerHTML="Поздравляю! Ты отлично справился с заданием и получаешь приз! Можешь поиграть в игру!"
	$("#prize").removeClass("invisible");
	$("#startGame").removeClass("invisible");
}
else if(count==0 && mark<8)
{
	prize.innerHTML="Эх! Немножко не хватило баллов для получения приза. Но не" +
	" расстраивайся! Ты можешь попробовать еще раз и у тебя обязательно получится!"
}

	}//закрытие функции userAnswer
check.addEventListener("click", userAnswer);//назначение и вызов функции для события "нажатие" кнопки "Проверить"
