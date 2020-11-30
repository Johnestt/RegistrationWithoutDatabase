<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лабораторная 2</title>
</head>
<body>
<p>
    Лабораторная работа №2
</p>
<p>
    Вариант №12
</p>
<p>
    Регистрация пользователя без Базы Данных
</p>
<p>
    Сделал: Нестеров И.С. из группы ПИб-<span>181</span>
</p>
<form action="working.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Регистрация:</legend>
        <label for="name">Ваше имя: <br>
            <input  id="name" type="text" placeholder="Фамилия И.О." name="nm" pattern="^[А-Я][а-я]{1,20}\s+[А-Я].+[А-Я]." required />
        </label>
        <label for="file"><hr align="left" width="300" size="4" color="#ff9900">Ваша аватарка: <br>
            <input  id="file" type="hidden" name="Sys_Size" value="25000000">
            <input  id="file" type="file" name="filename" size="10">
        </label>
        <label for="gender"><hr align="left" width="300" size="4" color="#ff9900">Выберите ваш пол: <br>
            <input  id="gender" type="radio" name="male" required value="Мужчина"> Мужской<br>
            <input  id="gender" type="radio" name="male" value="Женшина"> Женский
        </label>
        <label for="hobby"><hr align="left" width="300" size="4" color="#ff9900">Выберите ваше хобби: <br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Просмотр мультфильмов">Просмотр мультфильмов<br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Просмотр фильмов">Просмотр фильмов<br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Просмотр сериалов">Просмотр сериалов<br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Чтение книг">Чтение книг<br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Коллекционирование">Коллекционирование<br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Быть киберспортсменом">Быть киберспортсменом<br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Заниматья спортом">Заниматья спортом<br>
            <input  id="hobby" type="checkbox" name="hob[]" value="Программировать">Программировать<br>
        </label>
        <label for="ScriptData"><hr align="left" width="300" size="4" color="#ff9900">Ваш день рождения: <br>
            <input  id="ScriptData" type="text" name="date" placeholder="ДД.ММ.ГГ" pattern="[0-3][0-9]\.[0-1][0-9]\.[0-9]{2}" required />
        </label>
        <label for="ScriptPhone"><hr align="left" width="300" size="4" color="#ff9900">Введите телефон
            <input  id="ScriptPhone" type="tel" name="tel" placeholder="+7 (900) 999-99-99" required />
        </label>
        <label for="textarea"><hr align="left" width="300" size="4" color="#ff9900">Расскажите немного о себе:
            <br>
            <textarea  id="textarea" name="own" required>

            </textarea>
        </label>
        <br>
        <br>
        <input type="submit" name="submit" value="Отправить">
        <input type="reset" name="res" value="Сбросить">
    </fieldset>

</form>
</body>
<script src="JS/jquery.min.js"></script>
<script src="JS/jquery.mask.min.js"></script>

<script>
    $(function() {
        $("#ScriptPhone").mask('+7(000)000-00-00');
    });
    $(function() {
        $("#ScriptData").mask('00.00.00');
    });
</script>
</html>