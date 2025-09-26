<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Квинси!">
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
            <h1>Информация о расе</h1>
            <img src="../img/Квинси/квинси.jpg" alt="Квинси">
            <h2>Квинси</h2>
            <p>
                Квинси — это одна из ключевых групп персонажей в аниме "Блич". 
                Они являются охотниками на пустых и имеют уникальные способности, основанные на духовной энергии.
            </p>
            <video src="../video/Квинси.mp4" controls></video>
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