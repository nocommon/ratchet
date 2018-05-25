<?php
use Ratchet\Server\IoServer;
use MyApp\Chat;

	require __DIR__.'/vendor/autoload.php';

	$server = IoServer::factory(new Chat(), 9900);

	$server->run();