<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style/style_index.css">
        <link rel="stylesheet" href="style/fonts.css">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script defer src="js/jquery.flexslider.js"></script>
        
        <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
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
            <div id="container" class="cf">
                <div id="main" role="main">
                  <section class="slider">
                    <div class="flexslider">
                      <ul class="slides">
                            <li>
                            <img src="img/kitchen_adventurer_cheesecake_brownie.jpg" />
                            </li>
                            <li>
                            <img src="img/kitchen_adventurer_lemon.jpg" />
                            </li>
                            <li>
                            <img src="img/kitchen_adventurer_donut.jpg" />
                            </li>
                            <li>
                            <img src="img/kitchen_adventurer_caramel.jpg" />
                            </li>
                      </ul>
                    </div>
                  </section>
                </div>
             </div>
            <div class="iContentText">
                <div class="iHeadText">В моём блоге ты узнаешь много интересного обо мне!</div>
                <div class="iText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                <div class="iTextItalic">
                    <div class="iIco1"></div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    <div class="iIco2"></div>
                </div>
                <div class="iText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</div>




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
