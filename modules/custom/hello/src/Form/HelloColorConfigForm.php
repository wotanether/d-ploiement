<?php
namespace Drupal\hello\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloColorConfigForm extends ConfigFormBase{

	/**
	* {@inheritdoc}.
	*/
	public function getFormId(){
		return 'Hello_color_config_form';
	}

	/**
	* {@inheritdoc}.
	*/
	protected function getEditableConfigNames(){
		return['hello.config'];
	}

	/**
	* {@inheritdoc}.
	*/
	public function buildForm(array $form, FormStateInterface $form_state){

		//kint($form_state->getRebuildInfo()['result']);
		
		$color = $this->config('hello.config')->get('color');

		$form['color'] = [
			'#type' => 'select',
			'#title' => $this->t('Color'),
			'#required' => TRUE,
			'#options' => [
				'red' => $this->t('red'),
				'orange' => $this->t('orange'),
				'green' => $this->t('green'),
			],
			'#default_value' => $color,
			'#ajax' => [
				'callback'=> [$this,'submitForm'],
				'event' => 'change',
			],

		];

		/*$form['submit'] = [
			'#type' => 'submit',
			'#value' => $this->t('submit'),
		];*/
		
	return $form;
		
	}

	/**
	* {@inheritdoc}.
	*/
	public function submitForm(array &$form, FormStateInterface $form_state){
		$color = $form_state->getValue('color');
		$this->config('hello.config')->set('color', $color);
		$this->config('hello.config')->save();

		\Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();
	}

}