<?php

namespace Drupal\hello\Controller;

	use Drupal\Core\Controller\ControllerBase;
	use Drupal\Core\Entity\Entity;

class HelloNodeHistoryController extends ControllerBase{
	public function content(\Drupal\node\NodeInterface $node){
		$nodeId = $node->id();
		$database = \Drupal::database();
		$session = $database->select('hello_node_history','hnh')
							->fields('hnh', array('nid', 'uid','update_time'))
							->condition('hnh.nid',$nodeId,'=');

		$data = $session->execute();
		$count = $session->countQuery()->execute()->fetchField();

		$storage = \Drupal::entityTypeManager()->getStorage('user');

		$rows = [];
		foreach($data as $item){
			if($item->uid == 0){
				$user_name = "anonymous";
			}
			else{
				$user = $storage->load($item->uid);
				$user_name = $user->toLink();
			}

			$date = \Drupal::service('date.formatter')->format($item->update_time,'node_history');
			$rows []= array($user_name,$date);
		}

		$table = array(
			'#type' => 'table',
      		'#header' => [
        		'Update Author', 'Update Time'
      			],
      		'#rows' => $rows,
      		'#cache'=>[
				'keys'=>['build10'],
				'tags'=>['node:'.$nodeId],
			]
			);

		$list = array(
			'#theme' => 'hello_node_history',
      		'#node' => $node,
      		'#count' => $count,
			);

		return array($list,$table);
	}
}