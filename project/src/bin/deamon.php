<?php

namespace ChatApp\bin;


use ChatApp\Chat;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

require __DIR__.'/../../vendor/autoload.php';

/*$server = IoServer::factory(
    new Chat(),
    '3008',
    '127.0.0.1'
);*/
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    3008,
    '127.0.0.1'
);

echo "server run";
$server->run();