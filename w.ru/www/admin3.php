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
<!--						<img src="app/img/user.png" alt="user">-->
					<div class="text">
						<h5>Administrator</h5>
<!--						<p>Administrator</p>-->
					</div>
				</a></li>
			</ul>
		</div>
	</header>

	<main>
		<aside class="left_side">
			<ul>
				<li><a href="admin.php"><img src="app/img/messages.png" alt="messages">Добавить новость</a></li>
				<li><a href="admin2.php"><img src="app/img/calendar.png" alt="calendar">Изменить новость</a></li>
				<li class="active"><a href="admin3.php"><img src="app/img/page.png" alt="page">Удалить новость</a></li>
			</ul>
		</aside>
		<?
        include_once "db_connect.php";
        $query = "SELECT * FROM blog";
        $result = mysqli_query($connect, $query);
        ?>
		<section>
			<h2>Удалить новость</h2>
			<form name="del" action="del.php" method="get">
                <textarea readonly class="allNews" cols="45" rows="6"><?
                        while($row = mysqli_fetch_array($result)){
                            echo "".$row["id"]."-----".$row["nameK"]."\n";
                        }
                    ?>
                </textarea><br>
                <input name="id" type="text" class="delInputID" placeholder="ID новости"><br><br>                
                <input type="submit">
			</form>
		</section>
	</main>


	<script src="app/js/main.js"></script>
</body>
</html>