
<article class="siteArticle container" id="contactform">
	<header><h1><?=(isset($data['formTitle'])?$data['formTitle']:'')?></h1></header>
	<div>
		<form class="text-center" id="application" action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<input name="name" id="applicationName" maxlength="20" placeholder="Введите ваше имя" required />
	   		<input name="email" type="email" id="applicationEmail" maxlength="30" placeholder="Введите ваш E-mail" required />
	   		<input name="telephone" type="Tel" id="applicationTelephone" maxlength="20" placeholder="Введите ваш телефон" required/>
	   		
	   		<button class="applicationButton" type="submit" form="application">Отправить</button>
			<!-- Передаем невидимые параметры для отображение результата -->

			<input type="hidden" name="controller" value="contactform">
			<input type="hidden" name="action" value="send">


		</form>
	</div>
</article>

