<?php

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class HelloController extends ControllerBase{
	public function content($param){
		//kint($param);die();
//il y a plusieurs façon d'appeler les objets qui nous interresse(dans tous les cas cela utilise le container()->get('current_user'))
		$user = $this->currentUser()->getAccountName();
		//$user = Drupal::currentUser()->getAccountName();
		//$user = Drupal::service('current_user')->getAccountName();

		/*return ['#markup' => $this->t("Vous êtes sur la page Hello. Votre nom
d'utilisateur est %nom et voici le paramètre dans l'URL: %param",array('%nom'=>$user,'%param'=>$param))];
	}*/
		if($param != NULL){
			$msg= t(" et voici le paramètre dans l'URL: %param",array('%param'=>$param));
		}
		else{
			$msg="";
		}
		return ['#markup' => $this->t("Vous êtes sur la page Hello. Votre nom d'utilisateur est %nom %msg",array('%nom'=>$user,'%msg'=>$msg)) ];
	}
	public function jsonPage(){
		//3 façons de retourner un tableau json dans la page:(ne pas oublier de déclarer le use au début du fichier)

		/*$response= new Response();
		$response->headers->set('Content-Type', 'application/json');
		$array = array('a' => 'do','b' => 'ré','c' => 'mi');
		$json = json_encode($array);
		$response->setContent($json);*/

		//$response = JsonResponse::fromJsonString('{"a":do,"b":ré,"c":mi}');//pas trop utile


		$response = new JsonResponse(array('a' => 'do','b' => 'ré','c' => 'mi'));
		
		return $response;

	}

}
