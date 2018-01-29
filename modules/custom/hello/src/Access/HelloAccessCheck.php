<?php

namespace Drupal\hello\Access;

use Drupal\Core\Access\AccessCheckInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Access\AccessResult;

class HelloAccessCheck implements AccessCheckInterface {

	public function applies(Route $route){
		return NULL;
	}

	public function access(Route $route, Request $request = NULL, AccountInterface $account){
		/*$param = $route->getRequirement('_access_hello');
		$storage = \Drupal::entityTypeManager()->getStorage('user');
		$user = $storage->load($account->id());
		$creation = $user->created->getValue();
		$creation = $creation[0]['value'];
		$now = time();
		if($creation+($param*3600) <= $now && $account->isAuthenticated()){
			return AccessResult::allowed()->cachePerUser()->setCacheMaxAge(300);
		}
		else{
			return AccessResult::forbidden()->cachePerUser()->setCacheMaxAge(300);
		}*/

		//ou en mieux!!
		$param = $route->getRequirement('_access_hello');
		$creation = $account->getAccount()->created;
		if($creation+($param*3600) <= time() && $account->isAuthenticated()){
			return AccessResult::allowed()->cachePerUser()->setCacheMaxAge(300);
		}
		else{
			return AccessResult::forbidden()->cachePerUser()->setCacheMaxAge(300);
		}
	}
}