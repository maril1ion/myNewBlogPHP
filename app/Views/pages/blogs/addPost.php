<h1 class="newBlog">Добавить новый блог</h1>
<form action="/admin/blogs/add" method="post">
  <div class="form">
    <div>
      <label for="input">Имя поста:</label>
      <input id="input" type="text" name='nameBlog'>
    </div>
    <div>
      <input type="submit" value="Отправить" name = 'sendPostr'>
      <div class="error">

<!--         return [
            'view' => $this,
            'session' => $this->session,
            'login' => $this->login,
            'complete' => 'Выполнено',
        ];
 -->
       <?php if (empty($session->getSession('errors'))) { ?>
          <span><?= $complete ?></span>
        <?php } else { ?>
          <?php foreach ($session->getSessionFlash('errors') as $errors) { ?>
            <span>Errors:</span>
            <ul>
              <li>
                <?= $errors ?>
              </li>
            </ul>
          <?php }?>
        <?php } ?>
      </div>

    </div>
  </div>

</form>