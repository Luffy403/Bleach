<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Чаде!">
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
            <img src="../img/Люди/Чад.jpg" alt="Чад">
            <h2>Ясотору Садо</h2>
            <p>
                Ясотору Садо — один из главных персонажей аниме "Блич". 
                Он известен своей физической силой и молчаливым характером. 
                Садо — наполовину японец, наполовину мексиканец, что отражается в его внешности: у него большие размеры и крепкое телосложение.
            </p>
            <video src="../video/Чад.mp4" controls></video>
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