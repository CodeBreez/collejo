<?php

$app = new Collejo\App\Foundation\Application(
    realpath(__DIR__ . '/../')
);

$app->singleton(
    Collejo\App\Contracts\Http\Kernel::class,
    Collejo\App\Http\Kernel::class
);

$app->singleton(
    Collejo\App\Contracts\Console\Kernel::class,
    Collejo\App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Collejo\App\Exceptions\Handler::class
);

return $app;
