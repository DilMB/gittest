<?php

$connect= new PDO(dsn: "mysql:host=localhost; dbname=kafedra; charset=utf8", username: 'root', password: '');

?> 

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet">
  <!-- <link href="css/outline.css" rel="stylesheet">
  <link href="css/outline-settings.css" rel="stylesheet">-->
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Мероприятия</title>
  </head>

  <body>
	<main>   

    <div class="left_column">
    <section class="side_navigation">
	    <nav class="site-navigation">
	    <ul class="ul_nav">
        <li class="site-navigation-item" ><a  href="http://localhost/example/page_teachers_staff.html">Преподаватели</a></li>
        <li class="site-navigation-item"><a href="http://localhost/example/schedule.html">Расписание</a></li>
        <li class="site-navigation-item"><a id="active" href="http://localhost/example/events.php">Мероприятия</a></li>
        <li class="site-navigation-item"><a href="http://localhost/example/page_useful_links.html">Справка</a></li>
	    </ul>
	    </nav>
		
		<div class="ad_post"><p class="ad_txt">Здесь могла быть ваша реклама</p></div>
		<div class="ad_post"><p class="ad_txt">Здесь могла быть ваша реклама</p></div>
	</section>
</div>

<div class="right_column">
   <header class="main-header">
   <div class="right"></div>
    <a class="logo" href="http://localhost/example/index.php">Кафедра</a>
	<!-- Тут будет ссылка на главную страницу сайта -->
	
	<a class="enter_button" href="http://localhost/example/index_admin.php">Зайти на кафедру</a>
	<!-- Тут будет ссылка на форму регистрации и входа на сайт, пока хз что да как -->
	</header>
	
<section class="events_content_place">
    
            <?php
                $events = $connect -> query("SELECT * FROM kafedra.events ORDER BY id_ev DESC");
                $events = $events -> fetchAll();
                ?>
                <ul class="evs">
                <?php foreach ($events as $event): ?>

                  <li class="ev">
                      <div class="data-event"><?=$event['data']?>
                      </div>                     
                      <h3 class="header-ev"><?= $event['header'] ?></h3>
                      <img class="img-ev" src="<?= $event['image'] ?>" width="450" height="370">

                      <div class="text-event"><?=$event['text']?>
                      </div>
                     
                  </li>
                  <?php endforeach; ?>
                </ul>
</section>
                               
	</main>
	
	<footer class="main-footer">
        <p class="contacts">Справочная информация. <br>Телефон:<a href="tel:87347635727" class="phone">8 (734) 763-57-27</a> <br> Почта:<a href="mailto:blablabla@mail.ru" class="mail">blablabla@mail.ru</a></p>
		
		<a class="logo_downstairs" href="http://localhost/example/index.php">К</a>
		<!-- Тут будет ссылка на главную страницу сайта -->
		
		<ul class="contacts_ul">
          <li class="contacts-navigation-item"> <p><a href="#"><img src="img/vk.svg" width="40" height="40"></a></p></li>
	      <li class="contacts-navigation-item"> <p><a href="#"><img src="img/twitter.svg" width="40" height="40"></a></p></li>
	      <li class="contacts-navigation-item"><p><a href="#"><img src="img/telegram.svg" width="40" height="40"></a></p></li>
	</ul>
	</footer>
  </body>
</html>