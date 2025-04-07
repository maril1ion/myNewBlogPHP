<form action="/blog/admin/post/add" method="post">
	<div class="flex my-auto flex-col items-center justify-evenly min-h-screen">
		<h1 class="text-center text-4xl">Добавить новый блог</h1>
		<div class="flex flex-col w-3xl gap-y-5">
			<div class="flex justify-between items-center flex-col w-full gap-y-5 transition-all duration-300 ease-in-out ">
				<div class="flex flex-col justify-center items-center border-2 border-[#12070f] rounded-xl bg-[#f5e5c4] text-[#12070f] hover:bg-[#12070f] hover:text-[#f5e5c4] hover:border-[#f5e5c4]  transition-all duration-300 ease-in-out " id="categoryContainer">
					<span class=" category__title text-3xl px-5  cursor-pointer transition-all duration-300 ease-in-out " id="categoryTitle">Выберите категорию:</span>
					<ul class="relative z-1 category__list text-2xl flex flex-col items-center justify-center w-full transition-all duration-300 ease-in-out" id="categoryList">
						<li class="category__item flex cursor-pointer border-b-2 border-t-2 hover:border-t-[#f5e5c4] pl-5 w-full "><input type="checkbox" id="categoryLive" name="1" value="live" class="cursor-pointer"><label for="categoryLive" class="category__label px-5 cursor-pointer w-full">Личная жизнь</label></li>
						<li class="category__item flex cursor-pointer border-b-2 pl-5 w-full"><input type="checkbox" id="categoryMusic" name="2" value="music"><label for="categoryMusic" class="category__label px-5 w-full cursor-pointer">Музыка</label>
						</li>
						<li class="category__item flex cursor-pointer pl-5 w-full"><input type="checkbox" id="categoryDev" name="3" value="dev"><label for="categoryDev" class="category__label px-5 w-full cursor-pointer">Разработка</label></li>
					</ul>
				</div>
			</div>
			<div class="flex justify-between gap-y-5 items-center flex-col w-full">
				<label for="category" class="text-3xl px-5">Название поста:</label>
				<input class="w-full py-2 text-xl px-5 border-2 border-[#12070f] rounded-md" id="input" type="text" placeholder="Название поста.." name='nameBlog'>
			</div>
			<div class="flex justify-between gap-y-5 items-center flex-col w-full">
				<label for="category" class="text-3xl px-5">Сообщение поста:</label>
				<textarea class="py-2 px-5 text-xl border-2 border-[#12070f] rounded-md w-full h-36" id="message" type="text" name='message' placeholder="Ваше сообщение..."></textarea>
			</div>
		</div>
		<div class=" flex flex-col gap-y-10">
			<input class="w-full btn px-3 py-1.5 font-normal leading-[1.5] rounded-md border border-solid border-[#f5e5c4] bg-[#12070f] text-[#f5e5c4] text-3xl active:border-[#f5e5c4] " type="submit" value="Отправить" name='sendPostr'>
			<div class="error font-bold text-xl">
				<?php if (empty($session->getSession('errors'))) { ?>
					<span><?= '' ?></span>
				<?php } else { ?>
					<?php foreach ($session->getSessionFlash('errors') as $errors) { ?>
						<span>Errors:</span>
						<ul>
							<li class="flex items-center gap-x-5">
								<?= $errors ?>
							</li>
						</ul>
					<?php } ?>
				<?php } ?>
			</div>

		</div>
	</div>

</form>