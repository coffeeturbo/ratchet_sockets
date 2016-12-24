<?php

namespace ChatApp\bin;


use ChatApp\Chat;
use ChatApp\ChatRoom;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\Wamp\ServerProtocol;
use Ratchet\WebSocket\WsServer;

require __DIR__.'/../../vendor/autoload.php';


$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
            /*new ServerProtocol(
                new ChatRoom()
            )*/
        )
    ),
    3008,
    '127.0.0.1'
);

echo "server run";
$server->run();