<?php
namespace Drupal\hello\Form;

	use Drupal\Core\Form\FormBase;
	use Drupal\Core\Form\FormStateInterface;
	use Drupal\Core\Ajax\AjaxResponse;
	use Drupal\Core\Ajax\CssCommand;
	use Drupal\Core\Ajax\HtmlCommand;



class CalculatriceForm extends FormBase{

	public function Calculate($first, $operator, $second){
		$first_value = $first;
		$second_value = $second;

		switch ($operator) {
    		case 0:
        		$result = $first_value+$second_value;
        		break;
    		case 1:
	        	$result = $first_value-$second_value;
	        	break;
	    	case 2:
	       	 	$result = $first_value*$second_value;
	        	break;
	        case 3:
	       	 	$result = $first_value/$second_value;
	        	break;
		}
		return $result;
	}


	/**
	* {@inheritdoc}.
	*/

	public function getFormId(){
		return 'calculatrice_form';
	}


	/**
	* {@inheritdoc}.
	*/
	public function buildForm(array $form, FormStateInterface $form_state){

		//kint($form_state->getRebuildInfo()['result']);

		$form['first_value'] = [
			'#type' => 'number',
			'#title' => $this->t('first value'),
			'#ajax' => [
				'callback'=> [$this,'validateTextAjax'],
				'event' => 'change',
			],
			'#required' => TRUE,

		];

		$form['operation'] = [
			'#type' => 'radios',
			'#title' => $this->t('operation'),
			'#options' => [
				0 => $this->t('add'),
				1 => $this->t('soustract'),
				2 => $this->t('multiply'),
				3 => $this->t('divide'),
			],
			'#default_value' => 0,
			'#ajax' => [
				'callback'=> [$this,'validateTextAjax'],
				'event' => 'change',
			],
		];

		$form['second_value'] = [
			'#type' => 'number',
			'#title' => $this->t('second value'),
			'#ajax' => [
				'callback'=> [$this,'validateTextAjax'],
				'event' => 'change',
			],
			'#suffix' =>'<span class="text-message"></span>',
			'#required' => TRUE,
		];

		$form['submit'] = [
			'#type' => 'submit',
			'#value' => $this->t('submit'),
		];

		if(isset($form_state->getRebuildInfo()['result'])){
			$result = ($form_state->getRebuildInfo()['result']);

			$form['result'] = [
    			'#type' => 'markup',
    			'#markup' => '<div>'.$result.'</div>',
 		 	];

		}
		
	return $form;
		
	}

/**
	* {@inheritdoc}.
	*/
	public function validateForm(array &$form, FormStateInterface $form_state){
		if($form_state->getValue('second_value') == 0){
			$form_state->setErrorByName('second_value', $this->t('you can\'t divide by 0'));
		}
	}


public function validateTextAjax(array &$form, FormStateInterface $form_state){


	//on pourrait utiliser un $form_state->getTriggeringElement['#name'] pour avoir le nom du champ qui active le callback
	//et conditionner plus précisement

	if($form_state->getValue('second_value')==0 && $form_state->getValue('operation')==3){
		$css = ['border'=>'2px solid red'];
		$display = ['display'=>'none'];
		$message = 'you cannot divide by '. $form_state->getValue('second_value');
	}
	else{
		$css = ['border'=>'0px solid green'];
		$display = ['display'=>'inline-block'];

		$first = $form_state->getValue('first_value');
		$operator = $form_state->getValue('operation');
		$second = $form_state->getValue('second_value');

		$result = $this->Calculate($first,$operator,$second);
		$message = $result;
	}

	$response = new AjaxResponse();
	$response-> addCommand(new CssCommand('#edit-second-value',$css));
	$response-> addCommand(new HtmlCommand('.text-message',$message));

	$response-> addCommand(new CssCommand('#edit-submit',$display));



	return $response;

}

	/**
	* {@inheritdoc}.
	*/
	public function submitForm(array &$form, FormStateInterface $form_state){

		$first = $form_state->getValue('first_value');
		$operator = $form_state->getValue('operation');
		$second = $form_state->getValue('second_value');

		$result = $this->Calculate($first,$operator,$second);

		$form_state->addRebuildInfo('result', $result);
		$form_state->setRebuild();
		//$form_state->setRedirect('hello.calculatrice.page',array('result'=>$result));

		//drupal_set_message($this->t('the result of the operation is %result', array('%result' => $result)));
		
	}

}