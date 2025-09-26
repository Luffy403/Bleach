<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Это страница о Маюри!">
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
            <img src="../img/Шинигами/Маюри.jpg" alt="Маюри">
            <h2>Маюри Куротсучи</h2>
            <p>
                Маюри Куротсучи — один из самых колоритных персонажей аниме "Блич". 
                Он является капитаном 12-го отряда и главой научного подразделения Сообщества душ. 
                Маюри известен своим эксцентричным поведением, высокими интеллектуальными способностями и безумной страстью к исследованиям.
            </p>
            <video src="../video/Маюри.mp4" controls></video>
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