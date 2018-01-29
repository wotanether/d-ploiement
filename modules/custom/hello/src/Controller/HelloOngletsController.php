<?php

namespace Drupal\hello\Controller;

	use Drupal\Core\Controller\ControllerBase;

class HelloOngletsController extends ControllerBase{
	public function content($nodetype){

		$storage = \Drupal::entityTypeManager()->getStorage('node');
		$ids = \Drupal::entityQuery('node')
			->condition('type', $nodetype)
			->pager('10')
			->execute();
		$items = array();
		if($ids){
			$nodes = $storage->loadMultiple($ids);

			foreach ($nodes as $node) {
				$items[] = $node->toLink();
			};
		}
		else{
			$items[] = "Le type de contenu ".$nodetype." n'existe pas!";
		}
				
		$list = array(
			'#theme' => 'item_list',
			'#items'  => $items,
			);
		$pager =array('#type' => 'pager');

		return array($list, $pager);
	}
}