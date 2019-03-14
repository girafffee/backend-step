Contcact form
<article class="siteArticle">
	<header><h1><?=(isset($data['pageTitle'])?$data['pageTitle']:'')?></h1></header>
	<div>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
			<input type="text" name="userName"><br />
			<input type="email" name="userMail"><br />
			<input type="tel" name="userPhone"><br />
			<textarea name="userMsg"></textarea><br />
			<input type="submit" name=" Отправить ">
			

			<input type="hidden" name="controller" value="contactform">
			<input type="hidden" name="action" value="send">
		</form>
	</div>
</article>