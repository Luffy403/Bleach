<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Бьякуе!">
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
            <img src="../img/Шинигами/Бьякуя.jpg">
            <h2>Бьякуя Кучики</h2>
            <p>
                Кучики Бьякуя — один из главных персонажей аниме "Блич", капитан 6-го отряда Готей 13. 
                Он известен своим непревзойденным мастерством в бою и спокойным, высокомерным характером. 
                Бьякуя — наследник влиятельного рода Кучики и придерживается строгих традиций своей семьи
            </p>
            <video src="../video/Бьякуя.mp4" controls></video>
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