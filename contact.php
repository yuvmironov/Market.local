<?php
	include('header.php');
?>

	<section class="contact">
		<div class="contact__item">
			<div class="contact__item-block">
				<span class="contact__item-name">
					Адрес:
				</span>
				<span class="contact__item-text">
					г. Москва,  ул. Комсомольская площадь 3/30 стр.4, оф. 421
				</span>
			</div>
			<div class="contact__item-block">
				<span class="contact__item-name">
					Тел.:
				</span>
				<span class="contact__item-text">
					+7 (499) 5500 801 <br />
					+7 (963) 6416 021 <br />
					+7 (977) 8090 682
				</span>
			</div>
			<div class="contact__item-block">
				<span class="contact__item-name">
					E-mail:
				</span>
				<span class="contact__item-text">
					smartsales@inbox.ru
				</span>
			</div>
			<div class="contact__item-block">
				<p class="contact__item-question">
					Остались вопросы
				</p>
				<a href="" class="contact__item-link link__button modal" id="contact_modal">Обратный звонок</a>
			</div>
		</div>
		<div class="contact__item">
			<img src="images/contact_image.jpg" alt="Контакты" class="contact__item-image">
		</div>
	</section>

	<?php
		include('footer.php');
	?>

	<div id="contact_modal_win">
		<div class="modal__content">
			<span id="close_contact_modal">
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
