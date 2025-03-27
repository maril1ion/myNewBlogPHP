<h1 style="text-align: center">Страница входа для админа</h1>

<form action="/login" method="post" class = "formAdmin__container">
  <h2 class = "formAdmin__title">Вход администратора</h2>
  <div class = "formAdmin__login">
    <label for="inputLogin">Введите логин администратора:</label>
    <input type="text" placeholder="admin" name="adminLogin" id="inputLogin">
  </div>

  <div class = "formAdmin__password">
    <label for="inputPassword">Введите пароль администратора:</label>
    <input type="password" placeholder="password" name="adminPassword" id="inputPassword">
  </div>
  <div class = "formAdmi__sumbit">
    <input type="submit" value="Вход">
  </div>
</form>