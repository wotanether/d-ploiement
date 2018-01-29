<?php

namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
*provide a session block.
*
*@Block(
*	id = "Sessions_actives",
*	admin_label = @Translation("Sessions actives")
*
*)
*/

class Sessions_actives extends BlockBase{


	public function build(){
		$database = \Drupal::database();
		$session = $database->select('sessions')
							->countQuery()
				            ->execute()
				            ->fetchField();
	
		$nbr = $session;
		$build= array(
			'#markup'=>$this->t("Il y a actuellement %nbr sessions actives, %nbr
			étant le nombre de sessions en base.",array('%nbr'=>$nbr)),
			'#cache'=>[
				'keys'=>['blocksession'],
				'tags'=> ['session'],
			]
			);
		return $build;
	}

	protected function blockAccess(AccountInterface $account){
		
		return AccessResult::allowedIfHasPermission($account,'block session access');

	}
}