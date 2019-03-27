<?php
namespace App\SiteMap;
use App\Layout\HeaderController;

/**
 * 
 */
class SiteMapController  extends \Kernel\Base\BaseController
{
	var $Model;

	function __construct($action = "index"){
		if ($action == "index") { $this->index(); return; };
	}

	public function index (){
		$data['pageTitle'] = "Site Map";
		HeaderController::$data ['pageTitle'] = " Welcome to my Site";

		//$data['sitemap_tech'] = \Kernel\Lib\PP::dump(\Kernel\Router::$routes);

		$data['sitemap'] = '<ol>' . "\n";
		foreach (\Kernel\Router::$routes as $url => $route) {
			if($route->siteMap){
				$data['sitemap'] .= '<li>' . "\n";
					$data['sitemap'] .= $url;
					$data['sitemap'] .= '<ul>' . "\n";
					foreach ($route as $key => $child) {

						if(!is_null($child) && $key != 'url'){
							$data['sitemap'] .= '<li>';
								$data['sitemap'] .= $child;
							$data['sitemap'] .= '</li>' . "\n";
						}
					}									

					$data['sitemap'] .= '</ul>' . "\n";
				$data['sitemap'] .= '</li>' . "\n";

			}
		}
		$data['sitemap'] .= '</ol>';

		
		$this->content =  self::render ('sitemap.tpl.php', $data);
	}

/*
|--------------------------------------------------------------------------
| Информация, которую вернет мой контроллер
|--------------------------------------------------------------------------
|
*/
	var $content;
	function getContent () {return $this->content;}

}