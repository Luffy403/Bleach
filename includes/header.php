<?php require_once 'config.php'; ?>
<header>
    <a href="<? echo $base_path; ?>/index.php" class="logo">
        <img src="<? echo $base_path; ?>/img/logo.jpg" alt="логотип">
    </a>
    <nav>
        <ul>
            <li><a href="<? echo $base_path; ?>/index.php">Главная</a></li>
            <li><a href="<? echo $base_path; ?>/anons.php">Анонс</a></li>
            <li><a href="<? echo $base_path; ?>/personazhi.php">Персонажи</a></li>
        </ul>
        <div class="dropdown">
            <button class="dropdown-but" id="dropBut">
                <img src="<? echo $base_path;?>/ico/Menu.svg" alt="менюшка">
            </button>
            <ul class="dropdown-ul" id="dropUl">
                <li class="drop"><a href="<? echo $base_path; ?>/index.php">Главная</a></li>
                <li class="drop"><a href="<? echo $base_path; ?>/anons.php">Анонс</a></li>
                <li class="drop"><a href="<? echo $base_path; ?>/personazhi.php">Персонажи</a></li>
            </ul>
        </div>
    </nav>
</header>
<script src="<? echo $base_path; ?>/js/dropdown.js"></script>