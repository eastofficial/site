<?
    if ($_COOKIE["status"] != "admin")
        header("Location: enter.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Test app</title>
	<link rel="stylesheet" href="app/css/normalize.css">
	<link rel="stylesheet" href="app/css/main.css">
</head>
<body>
	
	<header>
		<div class="logo">
			<h1>Admin Panel</h1>
		</div>
		<nav class="menu">
		</nav>
		<div class="notice">
			<ul>
				<li><a href="#" class="user">
					<img src="app/img/user.png" alt="user">
					<div class="text">
						<h5>Asif Aleem</h5>
						<p>Administrator</p>
					</div>
				</a></li>
			</ul>
		</div>
	</header>

	<main>
		<aside class="left_side">
			<ul>
				<li><a href="admin.php"><img src="app/img/messages.png" alt="messages">Добавить новость</a></li>
				<li class="active"><a href="admin2.php"><img src="app/img/calendar.png" alt="calendar">Изменить новость</a></li>
				<li><a href="admin3.php"><img src="app/img/page.png" alt="page">Удалить новость</a></li>
			</ul>
		</aside>
		<section>
			<h2>Изменить новость</h2>
			<form name="rel" action="rel.php" method="get">
               <?
                include_once "db_connect.php";
                $query = "SELECT * FROM blog";
                $result = mysqli_query($connect, $query);
                ?>
                <textarea readonly class="allNews" cols="45" rows="6"><?
                        while($row = mysqli_fetch_array($result)){
                            echo "".$row["id"]."-----".$row["nameK"]."\n";
                        }
                    ?></textarea><br>
                <input name="id" type="text" class="relInputID" placeholder="ID новости"><br><br>
			    <input name="nameK" type="text" class="relInputNameK" placeholder="Краткое название новости"><br><br>
			    <input  name="nameP" type="text" class="relInputNameP" placeholder="Полное название новости"><br><br>
			    
                <textarea name="desK" wrap="soft" cols="45" rows="6" class="relInputAreaDesK" placeholder="Краткое описание новости"></textarea><br><br>
                <textarea name="desP" wrap="soft" cols="45" rows="10" class="relInputAreaDesP" placeholder="Полное описание новости"></textarea><br><br>
                
                <input type="submit">
			</form>
		</section>
	</main>


	<script src="app/js/main.js"></script>
</body>
</html>