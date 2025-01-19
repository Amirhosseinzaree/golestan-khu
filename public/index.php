<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell
 * @license  MIT
 * @link     https://laravel.com
 */

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

/**
 * The environment the application is currently in.
 *
 * @var string
 */
define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
