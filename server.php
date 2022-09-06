<?php

use Swoole\Http\Server;
use Swoole\Http\Request;    
use Swoole\Http\Response;


$server = new Server("127.0.0.2", 8080);


$server->on("Start", function (Server $server){

    echo "Swoole http server is started at http://127.0.0.1:8000\n";

});

$server->on("Request", function(Request $request, Response $response){
    $response->header("Content-Type", "text/plain");
    $response->end("testando swoole\n");
});

$server->start();
?>

