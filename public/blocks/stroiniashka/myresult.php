
    <div class="container main">

        <div style="background: antiquewhite; color: #ff5644; padding: 1%; font-weight: bold; font-size: medium;">
        <h2><a name="myresult"></a>Правила взвешивания и заполнения результатов измерений</h2>
        <p>Во время снижения веса важно следить за несколькими параметрами, которые указаны в таблице ниже.
            Некоторые из них определяются с помощью особых весов с функцией определения содержания жира, воды, мышечной массы  и т.д. И в идеале было бы хорошо использовать именно такой прибор. Однако, если у вас в данный момент нет возможности воспользоваться подобными весами, то достаточно фиксировать те показатели, которые вы можете определить простыми измерениями с помощью сантиметровой ленты и обычных весов. Это ваш текущий вес, а так же объем груди, талии и бедер. Поэтому именно эти строки обязательны для заполнения в таблице ниже. Важно понимать, что во время <b>правильного</b> снижения веса организм должен освобождаться от лишнего жира и восполнять содержание воды, а так же мышечную и костную массу. Все это так же имеет определенный вес - полезную массу. Поэтому иногда, если следить только за килограммами, может показаться, что результата нет или он очень слабый. Однако, если отслеживать изменение объемов, то можно увидеть, что при незначительном снижении веса, объемы заметно тают.</p><br>
        <p>
            Итак. <b>Не</b> становитесь на весы каждый день. Взвешивание производите один раз в неделю. Старайтесь взвешиваться в одно и то же время, в один и тот же день недели. Лучше всего это делать утром после пробуждения перед завтраком. При замере объема груди старайтесь, чтобы сантиметровая лента располагалась на уровне сосков. При замере объема талии - на уровне пупка. При замере бедер - на уровне наиболее выступающей части ягодиц.
            Внесите все полученные измерения в соответствующие строки таблицы и нажмите кнопку отправить. После этого вы будете перенаправлены на сраницу итоговых результатов, где мы можем следить за процессом правильного снижения веса.
        </p>
        </div>

        <h1>Результаты измерений</h1>

        <div class="myresult">
            <form action="/stroiniashka/myresult" method="post" class="form-control">
                <?php if(isset($data['email'])): ?>
                    <input type="email" name="email" placeholder="<?=$data['email']?>" value="<?=$data['email']?>">
                <?php else: ?>
                    <input type="email" name="email">
                <?php endif; ?>
                <?php if(isset($_POST['date'])): ?>
                    <input type="date" name="date" placeholder="Дата взвешивания" value="<?=$_POST['date']?>">
                <?php else: ?>
                    <input type="date" name="date" placeholder="Укажите дату взвешивания">
                <?php endif; ?>

                <?php if(isset($_POST['weight'])): ?>
                    <input type="text" name="weight" placeholder="Введите текущий вес (например 65.3)" value="<?=$_POST['weight']?>"><br>
                <?php else: ?>
                    <input type="text" name="weight" placeholder="Введите текущий вес (например 65.3)"><br>
                <?php endif; ?>
                <?php if(isset($_POST['fat'])): ?>
                    <input type="text" name="fat" placeholder="Введите содержание жира (например 28.3)" value="<?=$_POST['fat']?>"><br>
                <?php else: ?>
                    <input type="text" name="fat" placeholder="Введите содержание жира (например 28.3)"><br>
                <?php endif; ?>
                <?php if(isset($_POST['visceral'])): ?>
                    <input type="text" name="visceral" placeholder="Введите содержание внутреннего жира (например 8.3)" value="<?=$_POST['visceral']?>">
                <?php else: ?>
                    <input type="text" name="visceral" placeholder="Введите содержание внутреннего жира (например 8.3)">
                <?php endif; ?>
                <?php if(isset($_POST['bone'])): ?>
                    <input type="text" name="bone" placeholder="Введите костную массу" value="<?=$_POST['bone']?>">
                <?php else: ?>
                    <input type="text" name="bone" placeholder="Введите костную массу (например 28.3)" >
                <?php endif; ?>
                <?php if(isset($_POST['water'])): ?>
                    <input type="text" name="water" placeholder="Введите содержание воды (например 28.3)" value="<?=$_POST['water']?>">
                <?php else: ?>
                    <input type="text" name="water" placeholder="Введите содержание воды (например 28.3)">
                <?php endif; ?>
                <?php if(isset($_POST['muscles'])): ?>
                    <input type="text" name="muscles" placeholder="Введите мышечную массу (например 28.3)" value="<?=$_POST['muscles']?>">
                <?php else: ?>
                    <input type="text" name="muscles" placeholder="Введите мышечную массу (например 28.3)">
                <?php endif; ?>
                <?php if(isset($_POST['physical'])): ?>
                    <input type="text" name="physical" placeholder="Введите физический тип" value="<?=$_POST['physical']?>">
                <?php else: ?>
                    <input type="text" name="physical" placeholder="Введите физический тип">
                <?php endif; ?>
                <?php if(isset($_POST['metabolism'])): ?>
                    <input type="text" name="metabolism" placeholder="Введите каллории" value="<?=$_POST['metabolism']?>">
                <?php else: ?>
                    <input type="text" name="metabolism" placeholder="Введите каллории">
                <?php endif; ?>
                <?php if(isset($_POST['age'])): ?>
                    <input type="text" name="age" placeholder="Введите биологический возраст" value="<?=$_POST['age']?>">
                <?php else: ?>
                    <input type="text" name="age" placeholder="Введите биологический возраст">
                <?php endif; ?>
                <?php if(isset($_POST['breast'])): ?>
                    <input type="text" name="breast" placeholder="Введите объем груди" value="<?=$_POST['breast']?>">
                <?php else: ?>
                    <input type="text" name="breast" placeholder="Введите объем груди">
                <?php endif; ?>
                <?php if(isset($_POST['waist'])): ?>
                    <input type="text" name="waist" placeholder="Введите объем талии" value="<?=$_POST['waist']?>">
                <?php else: ?>
                    <input type="text" name="waist" placeholder="Введите объем талии">
                <?php endif; ?>
                <?php if(isset($_POST['hips'])): ?>
                    <input type="text" name="hips" placeholder="Введите объем бедер" value="<?=$_POST['hips']?>">
                <?php else: ?>
                    <input type="text" name="hips" placeholder="Введите объем бедер">
                <?php endif; ?>
                <?php if(isset($data['message'])): ?>
                    <div class="error"><?=$data['message']?></div>
                <?php else: ?>
                    <div class="error"></div>
                <?php endif; ?>
                <button class="btn_dashboard" id="send">Отправить</button>
            </form>
        </div>

    </div>
</div>
