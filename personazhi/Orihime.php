<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Орихиме!">
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
            <img src="../img/Люди/Орихиме.jpg" alt="Орихиме">
            <h2>Орихимэ Ионуэ</h2>
            <p>
                Орихиме Иноуэ — один из ключевых персонажей аниме "Блич".
                Она обладательница яркого характера и доброй души, известна своей заботой о других.
                Орихиме имеет длинные рыжие волосы и часто носит косички, что придает ей миловидный вид.
            </p>
            <video src="../video/Орихиме.mp4" controls></video>
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