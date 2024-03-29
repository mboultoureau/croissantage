<?php

declare(strict_types=1);

// use App\Application\Actions\User\ListUsersAction;
// use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Slim\Views\Twig;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\StudentController;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });


    $app->get('/', HomeController::class . ':index');
    $app->get('/login', LoginController::class . ':index');
    $app->get('/students', StudentController::class . ':index');
};
