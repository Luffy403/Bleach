<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Ичиго!">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/personazh.css">
    <link rel="icon" href="../ico/Bleach.ico" type="image/x-icon">
    <title>Подробная информация</title>
</head>
<body>
    <?php
        require_once '../includes/header.php';
    ?>
    <main>
        <section class="container">
            <h1>Информация о персонаже</h1>
            <img src="../img/Шинигами/Ичиго.jpg" alt="Ичиго">
            <h2>Ичиго Куросаки</h2>
            <p>Ичиго Куросаки — главный герой аниме "Блич".
                Он — подросток с уникальной способностью видеть духов.
                Ичиго — смелый и решительный персонаж, готовый защищать своих друзей и близких любой ценой.Он отличается сильным чувством справедливости и неравнодушием к страданиям других.
                Несмотря на свою суровую внешность, Ичиго проявляет глубокую эмоциональность и заботу о своих друзьях.</p>
            <video src="../video/Ичиго.mp4" controls></video>
            <div class="btn-class">
                <a href="../personazhi.php">Назад</a>
            </div>
        </section>
    </main>
    <?php
        require_once '../includes/footer.php';
    ?>
</body>
</html>