<?php


require dirname(__DIR__) . '/htdocs/vendor/autoload.php';
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
include 'modules/custom/hello/src/Chat.php';

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new \Drupal\hello\Chat()
            )
        ),
        10001
    );

    $server->run();