<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Введенные вами данные</title>
</head>
<body>
<?php
$UserName = $_POST['nm'];
$Avatar = 'UserAvatars/' . basename($_FILES['filename']['name']);
$Gander = $_POST['male'];
$BD = $_POST['date'];
$Tel = $_POST['tel'];
$Comment = $_POST['own'];
?>
<p>
    <h1>Поздравляем с регитрацией!</h1>
    <br>
    <br>
<h3>Ваша Фамилия И. О. <?= $UserName ?></h3>
<p>
    <?php if (($_FILES['filename']['type'] == 'image/jpeg' or 'image/png' or 'image/gif') && move_uploaded_file($_FILES['filename']['tmp_name'], $Avatar)) {
        echo "<img src='$Avatar' width='250px' alt='Аватар пользователя'><br>";
    }  ?>
</p>
<p>
<h2>Ваша персональная информация:</h2>
<p>Я родилася, <?= $BD  ?> </p>
<p>Мой пол: <?= $Gander ?> </p>
<p>Мой номер телефона: <?= $Tel ?> </p>
<p>Мои хобби, это: <br>
    <?php
    if(isset($_POST['hob'])){
        $hobby = $_POST['hob'];
        foreach ($hobby as $q)
            echo $q . "<br />";
    }else{
        echo 'У меня нет увлечений';
    }

    ?>
</p>
<p>Иначе говоря, это про меня:<br><?= $Comment ?> </p>
<p><a href="index.php">Назад</a></p>
</body>
</html>