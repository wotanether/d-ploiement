<?php

namespace Drupal\hello\Controller;


use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Drupal\hello\Chat;

class HelloChatSocketController extends ControllerBase {
    public function server(){
    	kint(dirname(__DIR__) . '/htdocs/vendor/autoload.php');
    }
}