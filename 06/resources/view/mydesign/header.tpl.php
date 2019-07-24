<div id="containerHeader"  class="container-fluid">
	<header id="headerMain" class="container">
        <div class="row">
            <h1 id="siteLogo" class="col-lg-4"> <a href="<?=str_replace($_SERVER['PHP_SELF'], "", $_SERVER['PHP_SELF'])?>"> <?=(isset($data['pageTitle'])?$data['pageTitle']:' Page title')?> </a> </h1>

            <nav id="menuMain" class="col-lg-8">
            <?=$data['mainMenu']?>
            </nav>

	    </div>
    </header>
</div>
