<?php

namespace Drupal\hello\Controller;

	use Drupal\Core\Controller\ControllerBase;
	use Drupal\Core\Entity\Entity;

class HelloCalculatriceController extends ControllerBase{
	public function content($result){
		
		return ['#markup' => $result];
	}

}