<?php

require __DIR__ . '/../bootstrap/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Collejo\Core\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Collejo\Core\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
