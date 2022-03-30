<?php

namespace App\Controller;

use App\Repository\StudentRepository;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

abstract class BaseController
{
    protected $view;
    protected StudentRepository $studentRepository;

    public function __construct(ContainerInterface $container, StudentRepository $studentRepository)
    {
        $this->view = $container->get('view');
        $this->studentRepository = $studentRepository;
    }

    public function render(Request $request, Response $response, string $template, array $params = []): Response
    {
        return $this->view->render($response, $template, $params);
    }
}
