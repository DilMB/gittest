<h2> Работай, администратор </h2>

<?php

$connect= new PDO(dsn: "mysql:host=localhost; dbname=kafedra; charset=utf8", username: 'root', password: '');

if (isset($_POST['header'])) {
  
  $header = $_POST['header'];
  $text = $_POST['text'];
  $date = date(format: "Y-m-d");
  $image = $_POST['image'];
  $header = htmlspecialchars($header);
  $text = htmlspecialchars($text);
  $query = $connect->query("INSERT INTO kafedra.events (header, text, image, data) VALUES ('$header','$text','$image', '$data')");
  header("Location: http://localhost/example/adminpage.php");
  exit();
}

?> 
<p> Здесь добавляются посты с мероприятиями для страницы Мероприятия </p>
<form class="event_form" action="" method="POST">
                 <input class="events_name" type="text" name="header" placeholder="Заголовок события" required>
                 <textarea class="events_text" name="text" cols="30" rows="7" placeholder="текст события" required></textarea>
                 <textarea class="comments_name" type="text" cols="30" rows="7" name="image" placeholder="местоположение картинки по принципу img/название" required></textarea>
                 <input class="comments_buttom" type="submit">
</form>