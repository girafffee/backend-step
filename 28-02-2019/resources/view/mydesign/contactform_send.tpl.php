
<article class="siteArticle" id="contactform">
	<header><h1><?=(isset($data['formTitle'])?$data['formTitle']:'')?></h1></header>
	<div>
		<form class="text-center" id="application" action="<?=$_SERVER['PHP_SELF']?>" method="get">
			
	   		
	   		<button class="applicationButton" type="submit" form="application">На главную</button>
			<!-- Передаем невидимые параметры для отображение результата -->

			<input type="hidden" name="controller" value="home">
		</form>

	</div>
	<footer><span> <?=(isset($data['comment'])?$data['comment']:'')?></span></footer>
</article>