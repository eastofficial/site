<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style/style_index.css">
        <link rel="stylesheet" href="style/fonts.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
        <script>
            function getComment(e) {
                var text = $(".allComment").val();
                var name = $(".nameComment").val();
                var id = $(e).attr("comment");
                var pagNow = document.location.href;
                var page = 
                'http://alkosys.esy.es/site/comment.php?id='+id+'&text='+text+'&name='+name+'&page='+pagNow; 
                document.location.href = page;
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
                <div class="iText">Мой блог</div>


            </div>
            <div class="iContentText">
               <?
                include_once "db_connect.php";

                $id = $_GET["id"];

                $query = "SELECT * FROM blog WHERE id = '".$id."'";
                $result = mysqli_query($connect, $query);
                $result = mysqli_fetch_array($result);

                echo "<div class='iHeadText'>".$result["nameP"]."</div>";
                echo "<div class='iText'>".$result["descriptionP"]."</div>";
                ?>


                
<!--
                <br><br>
                <form name="comment" method="get" action="comment.php">
                    <input class="nameComment" name="nameComment" style="width: 100%; height: 20px;" type="text" placeholder="Название"><br><br>
                    <textarea class="allComment" placeholder="Текст комментария" name="allComment" style="width: 100%; height: 130px;"></textarea><br>
                    <input comment="<? echo $id; ?>" type="button" value="Отправить" onclick="getComment(this)">
                </form>
                <br>
                <br>
                <br>
                <div class="comments">
                   <article> 
                    <?

//                        $query = "SELECT * FROM comments WHERE id_news = '".$id."'";
//                        $result = mysqli_query($connect, $query);
//                        
//                        while($row = mysqli_fetch_array($result)){
//                            echo "<section>
//                            <h2>{$row['name']}</h2>
//                            {$row['text']}
//                            <p class=\"date\">{$row['login']}</p>
//                            </section><br>";
//                        }
                    ?>
                    </article> 
                </div>
-->
            </div>
        </div>

        <div class="footer">
            <div class="iCopy">
                © 2017 - Copyright All Right Reserved. Web Blog.
                <div class="iBtnUp"></div>
            </div>
        </div>




    </body>
</html>
