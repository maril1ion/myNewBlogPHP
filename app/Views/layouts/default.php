<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/css/app.css">
  <title><?= $title ?></title>
</head>

<div class="nav__container">
  <div class="logo"><span>My_Blog 🗒</span></div>

  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__items"><a href="/home">Домашняя</a></li>
      <li class="nav__items"><a href="/admin/blogs">Блог</a></li>
      <li class="nav__items"><a href="/admin/blogs/add">Добавить блог</a></li>
      <li class="nav__items"><a href="/login">Админ</a></li>
    </ul>
  </nav>
  <?php if ($login->check()) { ?>
    <div>
      <span>Привет пользователь: <?php echo $session->getSession("admin_id")["login"] ?? 'name'; ?></span>
      <form action="/logout" method="post">
        <button type="submit">Выход</button>
      </form>
    </div>
  <?php } ?>
</div>
<?= $content ?>
<footer>
  <h2>Какой-то footer и рабочий CSS</h2>
</footer>
</body>

</html>