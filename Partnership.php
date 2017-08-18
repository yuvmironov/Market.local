<?php
		include('header.php');
	?>

	<section class="image">
		<img src="images/partnership_image.jpg" alt="Базовое изображение" class="image-content" />
	</section>

	<section class="offer">
		<h2 class="offer-head">Мы предлагаем</h2>
		<div class="offer__content">
			<div class="offer__content_block">
				<i class="fa fa-thumbs-o-up fa-5x" aria-hidden="true"></i>
				<h3 class="offer__content_block-head">Лучшие цены</h3>
				<p class="offer__content_block-text">
					Мы проводим грамотное ценообразование, что позволяет нам качественно выделятся на фоне конкурентов
				</p>
			</div>
			<div class="offer__content_block">
				<i class="fa fa-star-o fa-5x" aria-hidden="true"></i>
				<h3 class="offer__content_block-head">Выгодные условия</h3>
				<p class="offer__content_block-text">
					Более ста наших партнеров со всей России уже зарабатывают с нами
				</p>
			</div>
			<div class="offer__content_block">
				<i class="fa fa-bolt fa-5x" aria-hidden="true"></i>
				<h3 class="offer__content_block-head">Скорость в работе</h3>
				<p class="offer__content_block-text">
					От принятия решения до его реализации во всех вопросах проходит минимум времени
				</p>
			</div>
		</div>
	</section>
	
	<section class="application">
		<img src="images/application_image.jpg" alt="Партнерство" class="application-image">
		<p class="application-text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis laboriosam doloremque placeat, quasi fuga magnam libero perspiciatis. Beatae, ipsam, veniam. Veniam quod deserunt repellat asperiores maiores corporis vitae ipsum quidem, eveniet maxime
		</p>
		<p class="application-text">
			animi praesentium similique nisi ratione sequi quia excepturi a numquam impedit? Recusandae inventore ab qui perspiciatis animi quae quibusdam dolore assumenda odit officia dolor, quo numquam 
		</p>
		<p class="application-text">
			harum, et dolorem, repellat! Eveniet quidem magni, ullam iure reiciendis, consequatur libero? Quam at perspiciatis quae eaque dolores maiores tempora! Repellendus, voluptates. Ipsam necessitatibus hic vero, voluptatem optio dignissimos, ipsum placeat asperiores sed architecto atque inventore impedit debitis corrupti adipisci ut nisi.
		</p>
		<a href="" class="application-link link__button modal" id="partner_modal">Оствить заявку</a>
	</section>

	<?php
		include('footer.php');
	?>
	
	<div id="partner_modal_win">
		<div class="modal__content">
			<span id="close_partner_modal">
				<i class="fa fa-window-close-o fa-2x" aria-hidden="true"></i>
			</span>
			<form class="modal__content-form">
				<p class="modal__content-name">
					Ваше имя
				</p>
				<input type="text" name="" /><br/>
				<p class="modal__content-name">
					Ваше телефон
				</p>
				<input type="text" name="" /><br/>
				<p class="modal__content-name">
					Ваш E-mail
				</p>
				<input type="text" name="" /><br/>
				<input type="submit" class="link__button" name="" />
			</form>
		</div>
	</div>

	<script src="js/jquery.js"></script>
    <script src="js/open_modal.js"></script>

</body>

</html>