<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Рендзи!">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/personazh.css">
    <link rel="icon" href="../ico/Bleach.ico" type="image/x-icon">
    <title>Подробная информация</title>
    <style>
        @media(max-width:440px){
            video{
                max-width: 340px;
                height: 240px;
            }
        }
        @media(max-width:380px){
            video{
                max-width: 300px;
                height: 240px;
            }
        }
        @media(max-width:370px){
            video{
                max-width: 270px;
                height: 230px;
            }
        }
        @media(max-width:360px){
            video{
                max-width: 230px;
                height: 220px;
            }
        }
    </style>
</head>
<body>
    <?php
        require_once '../includes/header.php';
    ?>
    <main>
        <section class="container">
            <h1>Информация о персонаже</h1>
            <img src="../img/Шинигами/Ренджи.jpg" alt="Ренджи">
            <h2>Ренджи Абарай</h2>
            <p>
                Ренджи Абарай — ключевой персонаж в аниме "Блич", летейнант 6-го отряда и обладатель яркой индивидуальности. 
                С длинными алыми волосами и татуировками, он выделяется среди других шинигами. 
                Ренджи известен своим темпераментом и преданностью друзьям, особенно Ичиго Куросаки.
            </p>
            <video src="../video/Ренджи.mp4" controls></video>
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