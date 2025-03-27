<h1 class="newBlog">Добавить новый блог</h1>
<form action="/admin/blogs/add" method="post">
  <div class="form">
    <div>
      <label for="input">Имя поста:</label>
      <input id="input" type="text" name='nameBlog'>
    </div>
    <div>
      <input type="submit" value="Отправить">
      <div class="error">


        <?php if (empty($getSessionErrors)) { ?>
          <span><?= $complete ?></span>
        <?php } else {  ?>
          <?php foreach ($getSessionErrors as $errors) { ?>
            <span>Errors:</span>
            <ul>
              <li>
                <?= $errors ?>
              </li>
            </ul>
          <?php } ?>
        <?php } ?>
      </div>

    </div>
  </div>

</form>