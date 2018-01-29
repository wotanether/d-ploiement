<?php

namespace Drupal\annonce;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Annonce entities.
 *
 * @ingroup annonce
 */
class AnnonceListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Annonce ID');
    $header['name'] = $this->t('Name');
    $header['author'] = $this->t('Author');
    $header['created_time'] = $this->t('Created Date');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\annonce\Entity\Annonce */
    /*kint($entity);
    die();*/
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.annonce.canonical',
      ['annonce' => $entity->id()]
    );
    $row['author'] = Link::createFromRoute(
      user_load($entity->getOwnerId())->getAccountName(),
      'entity.user.canonical',
      ['user' => $entity->getOwnerId()]
    );
    $row['created_time'] = format_date( $entity->getCreatedTime(), '', 'l j F Y - H:i:s');
    return $row + parent::buildRow($entity);
  }

}
