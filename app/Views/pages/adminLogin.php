
<form action="/blog/login" method="post" class = "flex my-auto flex-col items-center justify-evenly min-h-screen">

  <h1 class = "text-3xl text-center">Авторизация администратора</h1>
  <div class="text-2xl italic flex flex-col gap-y-4">
    <label for="inputLogin" class = "text-center">Введите логин администратора:</label>
    <input type="text" placeholder="admin" name="adminLogin" id="inputLogin" class = "w-[535px] font-bold text-xl p-4 border-2 border-solid border-main-blac rounded-xl decoration-0 bg-[#F5E5C4] text-[#12070f] placeholder:font-normal placeholder:italic placeholder:tracking-wider placeholder:text-main-black">
  </div>
  <div class="text-2xl italic flex flex-col gap-y-4">
    <label for="inputPassword" class = "text-center">Введите пароль администратора:</label>
    <input type="password" placeholder="password" name="adminPassword" id="inputPassword" class = "w-[535px] font-bold text-xl p-4 border-2 border-solid border-black rounded-xl decoration-0 bg-[#F5E5C4] text-[#12070f] placeholder:font-normal placeholder:italic placeholder:tracking-wider placeholder:text-main-black">
  </div>

  <div class = "w-[535px]">
    <input type="submit" class="w-full btn px-3 py-1.5 font-normal leading-[1.5] rounded-md border border-solid border-[#f5e5c4] bg-[#12070f] text-[#f5e5c4] text-3xl active:border-[#f5e5c4] " value="Вход" name = "loginSubmit">
  </div>
<div class = "text-md w-xl h-6 text-center">
 <span class = "text-[#b11e4d] flex items-center justify-center gap-x-2 font-bold">

  <?php echo $login->checkLogin(); ?>
</span>
</div>


</form>