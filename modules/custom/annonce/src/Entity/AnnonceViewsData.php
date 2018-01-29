<?php

namespace Drupal\annonce\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Annonce entities.
 */
class AnnonceViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();
    //kint($data);

    $data['annonce_history']['table']['group'] = t('Annonce history');
    $data['annonce_history']['table']['provider'] = 'annonce';
    $data['annonce_history']['table']['base'] = array(
     'field' => 'ahid',
     'title' => t('Annonce history'),
     'help' => t('Annonce history contains historical datas and can be related to annonces.'),
     'weight' => -100,
   );
    $data['annonce_history']['uid'] = array(
     'title' => t('Annonce User ID'),
     'help' => t('Annonce User ID.'),
     'field' => array(
       'id' => 'numeric',
     ),
     'sort' => array(
       'id' => 'standard',
     ),
     'filter' => array(
       'id' => 'numeric',
     ),
     'argument' => array(
       'id' => 'numeric',
     ),
     'relationship' => array(
	    // Views name of the table to join to for the relationship.
	    'base' => 'users_field_data',
	    // Database field name in the other table to join on.
	    'base field' => 'uid',
	    // ID of relationship handler plugin to use.
	    'id' => 'standard',
	    // Default label for relationship in the UI.
	    'label' => t('User content'),
	  ),
   );
    $data['annonce_history']['aid'] = array(
     'title' => t('Annonce ID'),
     'help' => t('Annonce  ID.'),
     'field' => array(
       'id' => 'numeric',
     ),
     'sort' => array(
       'id' => 'standard',
     ),
     'filter' => array(
       'id' => 'numeric',
     ),
     'argument' => array(
       'id' => 'numeric',
     ),
     'relationship' => array(
	    // Views name of the table to join to for the relationship.
	    'base' => 'annonce_field_data',
	    // Database field name in the other table to join on.
	    'base field' => 'id',
	    // ID of relationship handler plugin to use.
	    'id' => 'standard',
	    // Default label for relationship in the UI.
	    'label' => t('Annonce content'),
	  ),
   );
    $data['annonce_history']['date'] = array(
    'title' => t('Date'),
    'help' => t('Just a timestamp field.'),
    'field' => array(
      'id' => 'date',
    ),
    'sort' => array(
      'id' => 'date',
    ),
    'filter' => array(
      'id' => 'date',
    ),
  );

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
