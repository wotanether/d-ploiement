<?php

/**
 * @file
 * Contains \Drupal\photoswipe\Form\PhotoswipeAdminSettings.
 */

namespace Drupal\photoswipe\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;

class PhotoswipeAdminSettings extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'photoswipe_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('photoswipe.settings');

    foreach (Element::children($form) as $variable) {
      $config->set($variable, $form_state->getValue($form[$variable]['#parents']));
    }
    $config->save();

    if (method_exists($this, '_submitForm')) {
      $this->_submitForm($form, $form_state);
    }

    parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['photoswipe.settings'];
  }

  public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $form['photoswipe_always_load_non_admin'] = [
      '#type' => 'checkbox',
      '#title' => t('Load PhotoSwipe on all non-admin pages'),
      '#default_value' => \Drupal::config('photoswipe.settings')->get('photoswipe_always_load_non_admin'),
      '#description' => t('Useful if you want to use photoswipe elsewhere by just adding the <code>.photoswipe</code> CSS class.'),
    ];

    return parent::buildForm($form, $form_state);
  }

}
