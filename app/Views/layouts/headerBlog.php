<!-- burger button -->
<div class="text-xl font-medium w-full nav__mobile">
  <div
    class="flex items-center justify-between nav__mobile--wrapper">
    <!-- home icons -->
    <div class="p">
      <a href="/" class="nav__home"><img src="/assets/img/header/home.svg" alt="Home" /></a>
    </div>
    <!-- nav links -->
    <div
      class="flex items-center justify-center text-xl rounded-2xl nav__links">
      <!-- bg-dark -->
      <div class="p-2 nav__links--items">
        <a
          href="/blog/home"
          class="rounded-2xl p-2 text-white header__nav-hover font-bold nav__links--scrolled">Домашняя</a>
      </div>
      <div class="vr-href rounded-2xl"></div>
      <div class="p-2 nav__links--items">
        <a
          href="/blog/admin/posts"
          class="rounded-2xl p-2 text-white header__nav-hover font-bold nav__links--scrolled">Блог</a>
      </div>
      <div class="vr-href rounded-2xl"></div>
      <div class="p-2 nav__links--items">
        <a
          href="/blog/admin/post/add"
          class="rounded-2xl p-2 text-white header__nav-hover font-bold nav__links--scrolled">Добавить блог</a>
      </div>
      <div class="vr-href rounded-2xl"></div>
      <div class="p-2 nav__links--items">
        <a
          href="/blog/login"
          class="rounded-2xl p-2 text-white header__nav-hover font-bold nav__links--scrolled">Админ</a>
      </div>
    </div>
    <?php if ($login->check()) { ?>
      <div>
        <span>Привет <?php echo $session->getSession('admin_id')['login'] ?>!</span>
        <!-- <form action="/blog/logout" method="post">
                <button type="submit">Выход</button>
              </form> -->
      </div>
    <?php } ?>
    <!-- reload -->
    <div
      class="p-2 text-center header__reload-img flex items-center justify-center">
    <form action="/blog/logout" method="post">
      <button class = "cursor-pointer">
      <img
        class="header__reload-img"
        src="/assets/img/header/reload.svg"
        alt="Reload" />
   </button>
  </form>
    </div>
  </div>
</div>