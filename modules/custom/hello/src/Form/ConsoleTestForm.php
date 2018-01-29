<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ConsoleTestForm.
 */
class ConsoleTestForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'console_test_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['chiffre'] = [
      '#type' => 'number',
      '#title' => $this->t('chiffre'),
      '#description' => $this->t('un chiffre'),
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#title' => $this->t('submit'),
      '#description' => $this->t('u submit'),
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
