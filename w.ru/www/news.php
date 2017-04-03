<?php
	include_once "db_connect.php";

    echo    "
                <script>
                    var url = window.location.href;
                    if(url.indexOf('http://alkosys.esy.es/site/news.php?page') == -1)
                        document.location.href = 'http://alkosys.esy.es/site/news.php?page=1';
                </script>
            ";

    // кол-во статей на странице
    $pp = 5;
    // текущая страница
    $page = 1;

    // -------------------------------------
    $query = "SELECT COUNT(id) FROM blog";
    $counter = mysqli_query($connect, $query);
    $counter = mysqli_fetch_array($counter);
    // в $counter[0] количество статей на сайте
    $pages = (int) ($counter[0] - 1) / $pp + 1; // количество страниц
    // -------------------------------------

    // -------------------------------------
    if( isset($_GET['page'])) {
    // Да, пользователь что-то передал
    $page = (int) $_GET['page'];
        if ( $page > 0 && $page <= $pages ) {
            // Вычисляем с какого номера статьи надо начинать выводить
            $start = $page * $pp - $pp;
            $sql = "SELECT * FROM blog ORDER BY time DESC LIMIT {$start}, {$pp}";
        }
        else { 
            $sql = 'SELECT * FROM blog ORDER BY time DESC LIMIT '. $pp; 
            $page = 1;
        }
    }
    else {
        $query = 'SELECT * FROM blog ORDER BY time DESC LIMIT '. $pp;
        $page = 1;
    }
    $result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style/style_index.css">
        <link rel="stylesheet" href="style/fonts.css">
        <link rel="stylesheet" href="style/news.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
        <script>
            function fullNews(e) {
                var page = 'http://alkosys.esy.es/site/fullNews.php?id=' + $(e).attr("name"); 
                document.location.href = page;
                //console.log($(e).attr("name"));
            }
        </script>
        
    </head>
    <body>
        <div class="head">
            <ul>
                <li><a href="index.php">ГЛАВНАЯ</a></li>
                <li><a href="news.php?page=1">НОВОСТИ</a></li>
                <li><a href="me.php">ОБО МНЕ</a></li>
                <li><a href="call.php">КОНТАКТЫ</a></li>
<!--
                <li id="enter"><a href="enter.php">ВХОД</a></li>
                <li><a href="reg.php">РЕГИСТРАЦИЯ</a></li>
-->
            </ul>
        </div>

        <div class="content">
            <div class="iHeader">

                <div class="iSocial">
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="iMidBlock">
                    <div class="iHorGreenLine1"></div>
                    добро пожаловать на мой личный блог
                    <div class="iHorGreenLine2"></div>

                </div>

            </div>
            
            <article> 
                <?php
                    while($row = mysqli_fetch_array($result)){
                        echo "<section name='".$row['id']."'>
                        <h2 name=".$row['id']." style='cursor: pointer;' onclick='fullNews(this)' >{$row['nameK']}</h2>
                        {$row['descriptionK']}
                        <p class=\"date\">{$row['time']}</p>
                        </section>";
                    }
                ?>
            
            </article>
            
        </div>
        <nav>
        <?php
        if( $page > 1 ) echo '<a href="news.php?page='.($page-1).'">← туда</a>';
        if( $page < $pages ) echo '<a href="news.php?page='.($page+1).'">туда →</a>';
        ?>
        </nav>
        <div class="footer">
            <div class="iCopy">
                © 2017 - Copyright All Right Reserved. Web Blog.
                <div class="iBtnUp"></div>
            </div>
        </div>




    </body>
</html>
