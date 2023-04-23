<?php

$connect= new PDO(dsn: "mysql:host=localhost; dbname=kafedra; charset=utf8", username: 'root', password: '');

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $comment = $_POST['comment'];
  $date = date(format: 'Y-m-d');

  $query = $connect->query("INSERT INTO kafedra.comments (username, comment, time) VALUES ('$username','$comment','$date')");
  header("Location: http://localhost/example/page_Latypov.php");
  exit();
}

?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Преподаватели</title>
  </head>
  
  <body>
  
    <header class="main-header">
    <a class="logo" href="#">Кафедра</a>
	<!-- Тут будет ссылка на главную страницу сайта -->
	
	<a class="enter_button" href="#">Зайти на кафедру</a>
	<!-- Тут будет ссылка на форму регистрации и входа на сайт, пока хз что да как -->
	</header>
	
	<main>
    <section class="side_navigation">
	    <nav class="site-navigation">
	    <ul class="ul_nav">
		<li class="site-navigation-item"><a href="#">Преподаватели</a></li>
        <li class="site-navigation-item"><a href="#">Расписание</a></li>
        <li class="site-navigation-item"><a href="#">Мероприятия</a></li>
        <li class="site-navigation-item"><a href="#">Полезная информация</a></li>
	    </ul>
	    </nav>
		
		<div class="ad_post"><p class="ad_txt">Здесь могла быть ваша реклама</p></div>
		<div class="ad_post"><p class="ad_txt">Здесь могла быть ваша реклама</p></div>
	</section>
	
	<section class="one_teacher_content_place">
           <h1 class="teacher_name_h1">Латыпов Нияз Растамович</h1>
           <img class="card-photo" src="img/Н.Латыпов.jpg" width="311" height="405" alt="Н.Латыпов">
           <p class="teacher_base_inf"><u>Дата рождения:</u> 20.12.1982</p>
           <p class="teacher_base_inf"><u>Занимаемые должности:</u><br>
            1. доцент, к.н., КФУ / Институт международных отношений / Высшая школа иностранных языков и перевода / Кафедра европейских языков и культур (основной работник) <br>
            2.доцент, к.н., КФУ / Институт международных отношений / Высшая школа иностранных языков и перевода / Кафедра европейских языков и культур (внутренний совместитель)</p>
           <p class="teacher_base_inf"><u>Рабочий адрес: </u>Казань, ул. М.Межлаука, д. 3/45,<br>
            <u>Учебное здание:</u> 31 <br>
            <u>Номер кабинета:</u> 213 <br>
            <u>E-mail:</u> Niyaz.Latypov@ksu.ru</p>

            <p class="disclaimer">Оставьте свой отзыв о преподавателе! Это анонимно :) <br>
                Не забывайте о вежливости: не используйте грубые выражения и матерные слова, ведь все мы ошибаемся...</p>


            <!--Здесь начинается территория комментариев-->
            <form action="" method="POST">
                 <input type="text" name="username" placeholder="Введите ваш ник...." required>
                 <textarea name="comment" cols="30" rows="10" placeholder="Введите ваш отзыв о преподавателе (комментарии с оскорблениями будут удаляться, будьте вежливы. Максимальная длина: 300 символов)...." required></textarea>
                 <input type="submit">
            </form>

            <hr>
            <?php
                $comments = $connect -> query("SELECT * FROM kafedra.comments ORDER BY time DESC");
                $comments = $comments -> fetchAll();
                

                if($comments) {

                foreach ($comments as $comment) {

                  
                  echo $comment['time']."\n";
                  echo '<br>';
                  echo $comment['username']."\n";
                  echo '<br>';
                  echo $comment['comment']."\n";
                  echo '<br>';
                  echo '<br>';
                }
                
                }

                
            ?> 

            
           
            
	</section>
	</main>
	
	<footer class="main-footer">
        <p class="contacts">Справочная информация. <br>Телефон:<a href="tel:87347635727" class="phone">8 (734) 763-57-27</a> <br> Почта:<a href="mailto:blablabla@mail.ru" class="mail">blablabla@mail.ru</a></p>
		
		<a class="logo_downstairs" href="#">К</a>
		<!-- Тут будет ссылка на главную страницу сайта -->
		
		<ul class="contacts_ul">
          <li class="contacts-navigation-item"> <p><a href="#"><img src="img/vk.svg" width="40" height="40"></a></p></li>
	      <li class="contacts-navigation-item"> <p><a href="#"><img src="img/twitter.svg" width="40" height="40"></a></p></li>
	      <li class="contacts-navigation-item"><p><a href="#"><img src="img/telegram.svg" width="40" height="40"></a></p></li>
	</ul>
	</footer>
  </body>
</html>