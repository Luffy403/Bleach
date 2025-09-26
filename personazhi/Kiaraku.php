<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Кьёраку">
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
            <img src="../img/Шинигами/Кьёраку.jpg" alt="Кьёраку">
            <h2>Кьёраку Сунсуй</h2>
            <p>
                Кьёраку Сунсуй — капитан 8-го отряда Готей 13 в аниме "Блич". 
                Он известен своим расслабленным и беззаботным характером, а также любовью к женщинам и алкоголю. 
                С длинными черными волосами и характерным головным убором, Кьёраку излучает харизму и спокойствие.
            </p>
            <video src="../video/Кьёраку.mp4" controls></video>
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