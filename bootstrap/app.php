<?php

$app = new Collejo\Core\Foundation\Application(
    realpath(__DIR__ . '/../')
);

$app->singleton(
    Collejo\Core\Contracts\Http\Kernel::class,
    Collejo\App\Http\Kernel::class
);

$app->singleton(
    Collejo\Core\Contracts\Console\Kernel::class,
    Collejo\App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Collejo\App\Exceptions\Handler::class
);

return $app;
