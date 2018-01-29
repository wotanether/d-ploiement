<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
*provide a hello Block.
*
*@Block(
*	id = "hello_block",
*	admin_label = @Translation("hello!")
*
*)
*/

class Hello extends BlockBase{


	public function build(){
		$timestamp = \Drupal::time()->getCurrentTime();
		$date = \Drupal::service('date.formatter')->format($timestamp,'custom','G\hi s\s');
		//kint($timestamp);

		$name= \Drupal::service('current_user')->getAccountName();
		if (!$name){
			$name= "Bobby l'annonyme";
		}
		$build= array(
			'#markup'=>$this->t("Bienvenue %name. Il est %date.",array('%name'=>$name,'%date'=>$date)),
			'#cache'=>[
				'keys'=>['build03'],
				'contexts'=> ['user'],
				'tags'=>['user:'.\Drupal::service('current_user')->id()], //contexts fait déjà un tag mais c'est plus propre d'en refaire un qui detruira le cache du user concerné quand son nom changera
				'max-age'=> 1000
			]
			);

		return $build;
	}
}