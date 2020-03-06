<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Practice</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  				<a class="navbar-brand" href="/main">Practice 1 week</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
 				 </button>
  				<div class="collapse navbar-collapse" id="navbarNav">
   					 <ul class="navbar-nav">
     					 <li class="nav-item">
        					<a class="nav-link" href="/main">Главная</a>
     					 </li>
     					 <li class="nav-item">
        					<a class="nav-link" href="/services">Услуги</a>
     					 </li>
      					<li class="nav-item">
       				 		<a class="nav-link" href="/portfolio">Портфолио</a>
      					</li>
     					 <li class="nav-item">
        					<a class="nav-link" href="/contacts">Контакты</a>
     					 </li>
   					 </ul>
					 <?php if ($_SESSION['login'] == 'admin'): ?>
              					<ul class="navbar-nav justify-content-end">
              						<li class="nav-item">
                						<a class="nav-link" href="/admin">Админ-панель</a>
             						 </li>
             					</ul>
             				<?php endif; ?>
             				<?php if ($_SESSION['login'] == ''): ?>
   					 <ul class="navbar-nav justify-content-end">
   					 	 <li class="nav-item">
     					 	<a class="nav-link" href="/auth">Авторизация</a>
     					 </li>
     					 <li class="nav-item">
     					 	<a class="nav-link" href="/register">Регистрация</a>
     					 </li>
   					 </ul>
             				<?php else: ?>
             					<ul class="navbar-nav justify-content-end">
              						<li class="nav-item">
                						<a class="nav-link" href="/logout">Выход</a>
              						</li>
            					 </ul>
             				 <?php endif; ?>
  				</div>
			</nav>
				<div>
					<div class="container">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div class="footer">
				<hr>
				<div class="col-12">
					<h3>О Нас</h3>
					<p>Делаем практику за вас.</p>
				</div>
				<br>
			</div>
	</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
