<div id="containerHeaderHome"  class="container-fluid">
	<header id="headerMain" class="container"><div class="row">
		<h1 id="siteLogo" class="col-lg-4"> <a href="#"> <?=(isset(\App\Config::$appSiteName)?\App\Config::$appSiteName:' Page title')?> </a> </h1>
		<nav id="menuMain" class="col-lg-8">
			<ul>
				<li><a href="#Home">Home</a></li>
				<li><a href="#Services">Services</a></li>
				<li><a href="#About">About</a></li>
				<li><a href="#Works">Works</a></li>
				<li><a href="#Blog">Blog</a></li>
				<li><a href="#Clients">Clients</a></li>
				<?php if(isset($_GET['action']))
					echo '<li><a href="#contactform">Contact</a></li>';
				else
					echo '';				
				?>
			</ul>
		</nav>
	<div></header>

	<div id="headerCaptions" class="text-center">
		<h2><?=(isset($data['pageTitle'])?$data['pageTitle']:' Page title')?></h2>
		<p>Your Favourite Creative Agency Template </p>
		<form align="center" action="<?=$_SERVER['PHP_SELF']?>" method="get">
				<button class="btn btn-warning" type="submit" id="button">
					Запросить форму
				</button> 

				<input type="hidden" name="controller" value="contactform">
				<input type="hidden" name="action" value="index">

			</form>
	</div>
</div>
