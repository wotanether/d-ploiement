<?php

namespace Drupal\hello\Controller;
	
	use Drupal\Core\Controller\ControllerBase;
	use SameerShelavale\PhpCountriesArray\CountriesArray;

class HelloCountryController extends ControllerBase{
	public function content($continent){
		//$countries  = PhpCountriesArray::get();
		$countries = CountriesArray::getFromContinent( 'num', 'name', ucfirst($continent) );
		return array(
			'#theme' => 'item_list',
			'#items'  => $countries,
			);
	}
}